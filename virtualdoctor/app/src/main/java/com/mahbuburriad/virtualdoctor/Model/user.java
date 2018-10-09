package com.mahbuburriad.virtualdoctor.Model;

/**
 * Created by mahbu on 10-Oct-18.
 */

public class user {
    private String name;
    private String password;

    public user(){

    }

    public user(String Name, String Password){
        Name = name;
        Password = password;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }
}
