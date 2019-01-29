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

public class MainActivity extends AppCompatActivity {
    private WebView webView;
    private SwipeRefreshLayout swipe;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        swipe = (SwipeRefreshLayout)findViewById(R.id.swipes);

        swipe.setOnRefreshListener(new SwipeRefreshLayout.OnRefreshListener() {
            @Override
            public void onRefresh() {
                loadWebs();
            }
        });
        loadWebs();
    }


    public void loadWebs(){
        webView = (WebView) findViewById(R.id.webVieawId);
        WebSettings webSettings = webView.getSettings();
        webSettings.setJavaScriptEnabled(true);
        webSettings.setAppCacheEnabled(true);

        webView.loadUrl("https://medicus.mahbuburriad.com/m/");

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
