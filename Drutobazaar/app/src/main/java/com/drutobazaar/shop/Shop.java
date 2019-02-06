package com.drutobazaar.shop;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class Shop extends AppCompatActivity {
    private WebView webView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_shop);
        loadWebs();
    }

    public void loadWebs(){
        webView = (WebView) findViewById(R.id.webVieawId);
        WebSettings webSettings = webView.getSettings();
        webSettings.setJavaScriptEnabled(true);
        webSettings.setAppCacheEnabled(true);

        webView.loadUrl("https://www.drutobazaar.com/");

        webView.setWebViewClient(new WebViewClient(){
            public void onReceivedError(WebView view, int errorcode, String description, String failingUrl){
                webView.loadUrl("file:///android_asset/www/error.html");
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
