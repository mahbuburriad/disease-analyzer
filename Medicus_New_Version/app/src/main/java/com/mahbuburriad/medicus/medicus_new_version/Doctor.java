package com.mahbuburriad.medicus.medicus_new_version;

import android.content.Intent;
import android.support.design.widget.FloatingActionButton;
import android.support.v4.widget.SwipeRefreshLayout;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class Doctor extends AppCompatActivity {
    private WebView webView;
    private SwipeRefreshLayout swipe;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_doctor);
        swipe = (SwipeRefreshLayout)findViewById(R.id.swipes);

        swipe.setOnRefreshListener(new SwipeRefreshLayout.OnRefreshListener() {
            @Override
            public void onRefresh() {
                loadWebs();
            }
        });
        loadWebs();


        FloatingActionButton fab = (FloatingActionButton) findViewById(R.id.fab);
        fab.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(getApplicationContext(), Doctor.class);
                startActivity(intent);
            }
        });

        FloatingActionButton fab_follow = (FloatingActionButton) findViewById(R.id.fab_follow);
        fab_follow.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(getApplicationContext(), MainActivity.class);
                startActivity(intent);
            }
        });


    }


    public void loadWebs(){
        webView = (WebView) findViewById(R.id.webVieawId);
        WebSettings webSettings = webView.getSettings();
        webSettings.setJavaScriptEnabled(true);
        webSettings.setAppCacheEnabled(true);

        webView.loadUrl("http://ec2-18-136-155-136.ap-southeast-1.compute.amazonaws.com/disease/diseases.pl");

        webView.setWebViewClient(new WebViewClient(){
            public void onReceivedError(WebView view, int errorcode, String description, String failingUrl){
                webView.loadUrl("file:///android_asset/www/index.html");
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
