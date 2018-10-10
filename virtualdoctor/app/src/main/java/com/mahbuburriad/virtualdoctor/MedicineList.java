package com.mahbuburriad.virtualdoctor;

import android.provider.ContactsContract;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.view.View;
import android.widget.Toast;

import com.firebase.ui.database.FirebaseRecyclerAdapter;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.mahbuburriad.virtualdoctor.Interface.ItemClickListener;
import com.mahbuburriad.virtualdoctor.Model.Medicine;
import com.mahbuburriad.virtualdoctor.ViewHolder.MedicineViewHolder;
import com.squareup.picasso.Picasso;

public class MedicineList extends AppCompatActivity {

    RecyclerView recyclerView;
    RecyclerView.LayoutManager layoutManager;

    FirebaseDatabase database;
    DatabaseReference medicineList;

    String categoryId="";

    FirebaseRecyclerAdapter<Medicine,MedicineViewHolder> adapter;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_medicine_list);

        //Firebase
        database = FirebaseDatabase.getInstance();
        medicineList = database.getReference("Medicine");
        recyclerView = (RecyclerView)findViewById(R.id.recycler_medicine);
        recyclerView.setHasFixedSize(true);
        layoutManager = new LinearLayoutManager(this);
        recyclerView.setLayoutManager(layoutManager);

        //Get intend here
        if(getIntent() != null){
            categoryId = getIntent().getStringExtra("CategoryId");
            if(!categoryId.isEmpty() && categoryId !=null){
                loadListMedicine(categoryId);
            }
        }

    }

    private void loadListMedicine(String categoryId) {

        adapter = new FirebaseRecyclerAdapter<Medicine, MedicineViewHolder>(Medicine.class,R.layout.medicine_item,MedicineViewHolder.class,medicineList.orderByChild("MenuId").equalTo(categoryId)) {
            @Override
            protected void populateViewHolder(MedicineViewHolder viewHolder, Medicine model, int position) {
                viewHolder.medicine_name.setText(model.getName());
                Picasso.with(getBaseContext()).load(model.getImage())
                        .into(viewHolder.medicine_image);
                final Medicine local=model;
                viewHolder.setItemClickListener(new ItemClickListener() {
                    @Override
                    public void onClick(View view, int position, boolean isLongClick) {
                        Toast.makeText(MedicineList.this, ""+local.getName(), Toast.LENGTH_SHORT).show();
                    }
                });

            }
        };

        //set Adapter
        recyclerView.setAdapter(adapter);


    }
}
