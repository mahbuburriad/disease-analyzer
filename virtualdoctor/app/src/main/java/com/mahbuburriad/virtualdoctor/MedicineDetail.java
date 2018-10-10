package com.mahbuburriad.virtualdoctor;

import android.support.design.widget.CollapsingToolbarLayout;
import android.support.design.widget.FloatingActionButton;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ImageView;
import android.widget.TextView;

import com.cepheuen.elegantnumberbutton.view.ElegantNumberButton;
import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;
import com.mahbuburriad.virtualdoctor.Model.Medicine;
import com.squareup.picasso.Picasso;

import org.w3c.dom.Text;

public class MedicineDetail extends AppCompatActivity {

    TextView medicine_name, medicine_price, medicine_description;
    ImageView medicine_image;
    CollapsingToolbarLayout collapsingToolbarLayout;
    FloatingActionButton btnCart;
    ElegantNumberButton numberButton;

    String medicineId="";

    FirebaseDatabase database;
    DatabaseReference medicines;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_medicine_detail);

        //Firebase

        database = FirebaseDatabase.getInstance();
        medicines = database.getReference("Medicine");

        //Init View

        numberButton = (ElegantNumberButton) findViewById(R.id.number_button);
        btnCart = (FloatingActionButton) findViewById(R.id.btnCart);
        medicine_description = (TextView) findViewById(R.id.medicine_description);
        medicine_name = (TextView) findViewById(R.id.medicine_name);
        medicine_price = (TextView) findViewById(R.id.medicine_price);
        medicine_image = (ImageView) findViewById(R.id.medicine_image);
        collapsingToolbarLayout = (CollapsingToolbarLayout) findViewById(R.id.collapsing);

        collapsingToolbarLayout.setExpandedTitleTextAppearance(R.style.ExpandedAppbar);
        collapsingToolbarLayout.setCollapsedTitleTextAppearance(R.style.CollapsedAppbar);


        //Get Food Id from Intent

        if (getIntent() != null)
            medicineId = getIntent().getStringExtra("MedicineId");

        if (!medicineId.isEmpty()) {
            getDetailMedicine(medicineId);
        }
    }

    private void getDetailMedicine(String medicineId) {

        medicines.child(medicineId).addValueEventListener(new ValueEventListener() {
            @Override
            public void onDataChange(DataSnapshot dataSnapshot) {
                Medicine medicine = dataSnapshot.getValue(Medicine.class);

                Picasso.with(getBaseContext()).load(medicine.getImage())
                        .into(medicine_image);
                collapsingToolbarLayout.setTitle(medicine.getName());
                medicine_price.setText(medicine.getPrice());
                medicine_name.setText(medicine.getName());
                medicine_description.setText(medicine.getDescription());
            }

            @Override
            public void onCancelled(DatabaseError databaseError) {

            }
    });
    }
}
