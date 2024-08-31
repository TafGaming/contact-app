<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $html = "
    <h1>Contact App</h1>
    <div>
        <a href='" . route('admin.contacts.index') . "'>All contacts</>
        <a href='" . route('admin.contacts.create') . "'>Add contacts</>
        <a href='" . route('admin.contacts.show', 1) . "'>Show contacts</>
    </div>
    ";
    return $html;
    ;
});
;

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/contacts', function() {
        return "<h1>Daftar Kontak</h1>";
    })->name('contacts.index');
});

Route::get('/contact', function () {
    return "<h1>Daftar Kontak</h1>";
});

Route::get('/contact/create', function () {
    return "<h1>Tambah Kontak Baru</h1>";
})->name('contacts.index');

Route::get('/contact/{id}', function ($id) {
    return "Halama Kontak dengan ID ". $id;
});

Route::get('/students/{name}', function ($name=null) {
    if ($name) {
        return "Nama Lengkap: ". $name;
    } else {
        return "Gada nama moas";
    } where('name', '[A-Za-z]+');
});
Route::get('/companies/{name?}', function($name=null) {
    if($name) {
        return "Nama Perusahaan: " . $name;
    } else {
        return "Nama Perusahaan Kosong";
    }
})->whereAlphaNumeric('name')->name('companies');