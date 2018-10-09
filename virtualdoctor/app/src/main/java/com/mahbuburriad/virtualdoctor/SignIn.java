package com.mahbuburriad.virtualdoctor;

import android.app.ProgressDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.Toast;

import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;
import com.mahbuburriad.virtualdoctor.Model.user;
import com.rengwuxian.materialedittext.MaterialEditText;

import org.w3c.dom.ProcessingInstruction;

public class SignIn extends AppCompatActivity {
    EditText edtPhone, edtPassword;
    Button btnSignIn;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sign_in);

        edtPassword = (MaterialEditText)findViewById(R.id.edtPassword);
        edtPhone = (MaterialEditText)findViewById(R.id.edtPhone);
        btnSignIn = (Button)findViewById(R.id.btnSignIn);

        FirebaseDatabase database = FirebaseDatabase.getInstance();
        final DatabaseReference table_user = database.getReference("user");

        btnSignIn.setOnClickListener(new View.OnClickListener(){

            @Override
            public void onClick(View view) {

                final ProgressDialog mDialog = new ProgressDialog(SignIn.this);
                mDialog.setMessage("Please wait....");
                mDialog.show();

                table_user.addValueEventListener(new ValueEventListener() {
                    @Override
                    public void onDataChange(DataSnapshot dataSnapshot) {

                        //check if user not exit in database

                        if(dataSnapshot.child(edtPhone.getText().toString()).exists()){




                        //get users information
                        mDialog.dismiss();
                        user user = dataSnapshot.child(edtPhone.getText().toString()).getValue(user.class);
                        if(user.getPassword().equals(edtPassword.getText().toString()))
                        {
                            Toast.makeText(SignIn.this, "Sign in successfully !", Toast.LENGTH_SHORT).show();
                        }
                        else {
                            Toast.makeText(SignIn.this, "Sign in Failed !!!", Toast.LENGTH_LONG).show();
                        }
                        }

                        else
                        {
                            Toast.makeText(SignIn.this, "User not exist in Database", Toast.LENGTH_SHORT).show();
                        }


                    }

                    @Override
                    public void onCancelled(DatabaseError databaseError) {

                    }
                });
            }
        });


    }
}
