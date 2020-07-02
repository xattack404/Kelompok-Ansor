package com.polije.Simba.API;

import com.polije.Simba.Model.ResponseModel;

import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.GET;
import retrofit2.http.POST;

public interface APIRequestData {
    @GET("retrieve.php")
    Call<ResponseModel> ardRerieveData();

    @FormUrlEncoded
    @POST("create.php")
    Call<ResponseModel> ardCreateData(
            @Field("nik") String nik,
            @Field("nama") String nama,
            @Field("umur") String umur,
            @Field("no_telepon") String no_telepon
    );

}
