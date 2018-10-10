package com.mahbuburriad.virtualdoctor.Model;

/**
 * Created by mahbu on 10-Oct-18.
 */

public class Medicine {

    private String Name, Image, Description, Price, Discount, MenuId;

    public Medicine(){

    }

    public Medicine(String name, String menuId, String discount, String price, String description, String image) {
        Name = name;
        MenuId = menuId;
        Discount = discount;
        Price = price;
        Description = description;
        Image = image;
    }

    public String getMenuId() {
        return MenuId;
    }

    public void setMenuId(String menuId) {
        MenuId = menuId;
    }

    public String getDiscount() {
        return Discount;
    }

    public void setDiscount(String discount) {
        Discount = discount;
    }

    public String getPrice() {
        return Price;
    }

    public void setPrice(String price) {
        Price = price;
    }

    public String getDescription() {
        return Description;
    }

    public void setDescription(String description) {
        Description = description;
    }

    public String getImage() {
        return Image;
    }

    public void setImage(String image) {
        Image = image;
    }

    public String getName() {
        return Name;
    }

    public void setName(String name) {
        Name = name;
    }
}
