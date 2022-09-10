<?php

namespace App\Models\Traits\Attributes;
use Illuminate\Support\Str;

trait ProdukAttributes {
    function getHargaStringAttribute(){
        return "Rp." .number_format ($this->attributes['harga']);
        }

    function handleUploadFoto(){
        if(request()->hasfile('foto')){
           $foto = request()->file('foto');
           $destination = "images/produk";
           $randomStr = Str::random(5);
           $filename =  $this->id."-".time()."-".$randomStr.".".$foto->Extension();
           $url = $foto->storeAs($destination, $filename);
           $this->foto = "app/".$url;
           $this->save();
        }
  
     }
}