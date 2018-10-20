package com.parse.starter;

import android.content.Intent;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v4.widget.SwipeRefreshLayout;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class pharmacy extends AppCompatActivity {
    private WebView webView;
    private SwipeRefreshLayout swipe;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pharmacy);
        getSupportActionBar().hide();

        swipe = (SwipeRefreshLayout)findViewById(R.id.swipe);

        swipe.setOnRefreshListener(new SwipeRefreshLayout.OnRefreshListener() {
            @Override
            public void onRefresh() {
                loadWeb();
            }
        });
        loadWeb();



        FloatingActionButton fab = (FloatingActionButton) findViewById(R.id.fab);
        fab.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(getApplicationContext(), RiderActivity.class);
                startActivity(intent);
            }
        });

        FloatingActionButton fab_follow = (FloatingActionButton) findViewById(R.id.fab_follow);
        fab_follow.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(getApplicationContext(), Doctor.class);
                startActivity(intent);
            }
        });

    }

    public void loadWeb(){
        webView = (WebView) findViewById(R.id.webViewId);

        WebSettings webSettings = webView.getSettings();
        webSettings.setJavaScriptEnabled(true);
        webSettings.setAppCacheEnabled(true);
        swipe.setRefreshing(true);
        webView.loadUrl("http://medicus.ml/mobile");

        webView.setWebViewClient(new WebViewClient(){

            public void onReceivedError(WebView view, int errorcode, String description, String failingUrl){
                webView.loadUrl("http://medicus.ml/mobile");
            }

            public void onPageFinished(WebView view, String url){
                swipe.setRefreshing(false);
            }

        });




    }



    @Override
    public void onBackPressed() {
        if(webView.canGoBack()){
            webView.goBack();
        }

        else{
            super.onBackPressed();
        }
    }


}

