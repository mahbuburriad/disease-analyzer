package com.mahbuburriad.virtualdoctor.Model;

import java.util.List;

/**
 * Created by mahbu on 11-Oct-18.
 */

public class Request {
    private String phone;
    private String address;
    private String total;
    private List<Order> medicines;
    private String name;

    public Request(String phone, String name, String total, String s, List<Order> cart){

    }

    public Request(String phone, String address, String total, List<Order> medicines, String name) {
        this.phone = phone;
        this.address = address;
        this.total = total;
        this.medicines = medicines;
        this.name = name;
    }

    public String getPhone() {
        return phone;
    }

    public void setPhone(String phone) {
        this.phone = phone;
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        this.address = address;
    }

    public String getTotal() {
        return total;
    }

    public void setTotal(String total) {
        this.total = total;
    }

    public List<Order> getMedicines() {
        return medicines;
    }

    public void setMedicines(List<Order> medicines) {
        this.medicines = medicines;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }
}
