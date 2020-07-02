package com.polije.Simba.Activity;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.polije.Simba.API.APIRequestData;
import com.polije.Simba.API.RetroServer;
import com.polije.Simba.Model.ResponseModel;
import com.polije.Simba.R;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class DaftarActivity extends AppCompatActivity {
    private EditText editTextNik, editTextNama, editTextUmur, editTextNo_telepon;
    private Button buttonSimpan;
    private String nik, nama, umur, no_telepon;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_daftar);
        buttonSimpan = findViewById(R.id.buttonSimpan);

        buttonSimpan.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                startActivity(new Intent(DaftarActivity.this, HomeActivity.class));
            }
        });

        editTextNik = findViewById(R.id.editTextNik);
        editTextNama = findViewById(R.id.editTextNama);
        editTextUmur = findViewById(R.id.editTextUmur);
        editTextNo_telepon = findViewById(R.id.editTextNo_telepon);

        buttonSimpan = findViewById(R.id.buttonSimpan);

        buttonSimpan.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                nik = editTextNik.getText().toString();
                nama = editTextNama.getText().toString();
                umur = editTextUmur.getText().toString();
                no_telepon = editTextNo_telepon.getText().toString();


                if(nik.trim().equals("")){
                    editTextNik.setError("NIK Harus Diisi !");
                }
                else if(nama.trim().equals("")){
                    editTextNama.setError("Nama Harus Diisi !");
                }
                else if(umur.trim().equals("")){
                    editTextUmur.setError("Umur Harus Diisi !");
                }
                else if(no_telepon.trim().equals("")){
                    editTextNo_telepon.setError("No Telepon Harus Diisi !");
                }

                else{
                    createData();
                }

            }
        });
    }

    private void createData(){
        APIRequestData ardData = RetroServer.konekRetrofit().create(APIRequestData.class);
        Call <ResponseModel> simpanData = ardData.ardCreateData(nik, nama, umur, no_telepon);

        simpanData.enqueue(new Callback<ResponseModel>() {
            @Override
            public void onResponse(Call<ResponseModel> call, Response<ResponseModel> response) {
                int kode = response.body().getKode();
                String pesan = response.body().getPesan();

                Toast.makeText(DaftarActivity.this, "kode : "+kode+" | Pesan : "+pesan, Toast.LENGTH_SHORT).show();
                finish();
            }

            @Override
            public void onFailure(Call<ResponseModel> call, Throwable t) {
                Toast.makeText(DaftarActivity.this, "Gagal Terhubung Server | "+t.getMessage(), Toast.LENGTH_SHORT).show();
            }
        });
    }
}