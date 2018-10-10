package com.mahbuburriad.virtualdoctor.ViewHolder;

import android.support.v7.widget.RecyclerView;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.ImageView;
import android.widget.TextView;

import com.mahbuburriad.virtualdoctor.Interface.ItemClickListener;
import com.mahbuburriad.virtualdoctor.R;

/**
 * Created by mahbu on 10-Oct-18.
 */

public class MedicineViewHolder extends RecyclerView.ViewHolder implements OnClickListener {

    public TextView medicine_name;
    public ImageView medicine_image;

    public void setItemClickListener(ItemClickListener itemClickListener) {
        this.itemClickListener = itemClickListener;


    }

    private ItemClickListener itemClickListener;


    public MedicineViewHolder(View itemView) {
        super(itemView);

        medicine_name = (TextView)itemView.findViewById(R.id.medicine_name);

        medicine_image = (ImageView)itemView.findViewById(R.id.medicine_image);

        itemView.setOnClickListener(this);
    }

    @Override
    public void onClick(View v) {

        itemClickListener.onClick(v,getAdapterPosition(),false);

    }
}
