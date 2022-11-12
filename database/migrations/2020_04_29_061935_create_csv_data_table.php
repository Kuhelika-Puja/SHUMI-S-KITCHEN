<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsvDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csv_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bestellnummer');
            $table->string('bestelldatum');
            $table->string('zahldatum');
            $table->string('tax_rate_from_database');
            $table->string('netto_umsatz');
            $table->string('umsatzsteuer');
            $table->string('versandkosten');
            $table->string('ust_auf_versandkosten');
            $table->string('versandkosten_netto');
            $table->string('umsatzsteuer_auf_versand');
            $table->string('gesamt_brutto');
            $table->string('rechnungsadresse_name');
            $table->string('rechnungsadresse_zusatz');
            $table->string('rechnungsadresse_strasse');
            $table->string('rechnungsadresse_plz');
            $table->string('rechnungsadresse_stadt');
            $table->string('rechnungsadresse_land');
            $table->string('rechnungsnummer_prefix');
            $table->string('rechnungsnummer');
            $table->string('plattform');
    
            $table->string('versandadresse_name');
            $table->string('versandadresse_zusatz');
            $table->string('versandadresse_strasse');
            $table->string('versandadresse_plz');
            $table->string('versandadresse_stadt');
            $table->string('versandadresse_land');
            $table->string('rechnungsdatum');
            $table->string('email');
            $table->string('zahlart');
            $table->string('gewicht');
            $table->string('rechnungsadresse_firma');
            $table->string('lieferadresse_firma');
            $table->string('währung');
            $table->string('sku_artikelnummer');
            $table->string('artikeltext');
            $table->string('anzahl');
            $table->string('rabatt_prozent');
            $table->string('einzelpreis_brutto');
            $table->string('positionspreis_brutto');
            $table->string('status');
            $table->string('eigenschaft1_name');
            $table->string('eigenschaft1');
            $table->string('eigenschaft2_name');
            $table->string('eigenschaft2_wert');
            $table->string('eigenschaft3_name');
            $table->string('eigenschaft3_wert');
            $table->string('eigenschaft4_name');
            $table->string('eigenschaft4_wert');
            $table->string('sku');
            $table->string('ean');
            $table->string('shopname');
            $table->string('lagerplatz');
            $table->string('rechnungsadresse_name2');
            $table->string('lieferadresse_name2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csv_data');
    }
}
