package com.example.flite_.listhalte;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;

public class MainActivity extends AppCompatActivity {

    ListView listView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        listView = (ListView)findViewById(R.id.list1);

        String[] values = new String[]{
                "Halte 1",
                "Halte 2",
                "Halte 3"};

        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this, android.R.layout.activity_list_item,android.R.id.text1,values);
        listView.setAdapter(adapter);

        listView.setOnItemClickListener(new AdapterView.OnItemClickListener(){
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id){
                if(position==0){
                    Intent myintent = new Intent(view.getContext(),halte1.class);
                    startActivityForResult(myintent,1);
                }
                if(position==1){
                    Intent myintent = new Intent(view.getContext(),halte2.class);
                    startActivityForResult(myintent,2);
                }
                if(position==2){
                    Intent myintent = new Intent(view.getContext(),halte3.class);
                    startActivityForResult(myintent,3);
                }
            }
        });

    }
}
