@extends('index')
@section('dashboard')
<div class="button-container">
    <!-- Toggle Button for BL Data Form -->
    <button class="toggle-button" onclick="toggleForm('bl-form')">BL Data Form</button>
    <!-- Toggle Button for Statistical Data Display -->
    <button class="toggle-button" onclick="toggleForm('statistical-data')">Statistical Data</button>
</div>
  <div class="bl-container" id="bl-form">
    <h2>BL Data Form</h2>
    <form action="#" method="post">
      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="bl_no">BL No:</label>
        <input type="text" id="bl_no" name="bl_no" required>
      </div>
      <div class="form-group">
        <label for="importer_name">Importer Name:</label>
        <input type="text" id="importer_name" name="importer_name" required>
      </div>
      <div class="form-group">
        <label for="exporter_name">Exporter Name:</label>
        <input type="text" id="exporter_name" name="exporter_name" required>
      </div>
      <div class="form-group">
        <label for="hs_code">HS Code:</label>
        <input type="text" id="hs_code" name="hs_code" required>
      </div>
      <div class="form-group">
        <label for="product_description">Product Description:</label>
        <input type="text" id="product_description" name="product_description" required>
      </div>
      <div class="form-group">
        <label for="package_no">Package No:</label>
        <input type="text" id="package_no" name="package_no" required>
      </div>
      <div class="form-group">
        <label for="package_unit">Package Unit:</label>
        <input type="text" id="package_unit" name="package_unit" required>
      </div>
      <div class="form-group">
        <label for="teu">TEU:</label>
        <input type="number" id="teu" name="teu" required>
      </div>
      <div class="form-group">
        <label for="feu">FEU:</label>
        <input type="number" id="feu" name="feu" required>
      </div>
      <div class="form-group">
        <label for="port_of_loading">Port of Loading:</label>
        <input type="text" id="port_of_loading" name="port_of_loading" required>
      </div>
      <div class="form-group">
        <label for="port_of_unloading">Port of Unloading:</label>
        <input type="text" id="port_of_unloading" name="port_of_unloading" required>
      </div>
      <div class="form-group">
        <label for="origin_country">Origin Country:</label>
        <input type="text" id="origin_country" name="origin_country" required>
      </div>
      <div class="form-group">
        <label for="destination_country">Destination Country:</label>
        <input type="text" id="destination_country" name="destination_country" required>
      </div>
      <input type="submit" value="Submit">
    </form>
  </div>
  <!-- Statistical Data Display -->
  <div class="stastical-container" id="statistical-data">
    <h2>Statistical Data Form</h2>
    <form action="#" method="post">
      <div class="form-group">
        <label for="year">Year:</label>
        <input type="text" id="year" name="year" required>
      </div>
      <div class="form-group">
        <label for="month">Month:</label>
        <input type="text" id="month" name="month" required>
      </div>
      <div class="form-group">
        <label for="hscode">HS Code:</label>
        <input type="text" id="hscode" name="hscode" required>
      </div>
      <div class="form-group">
        <label for="hscode_description">HS Code Description:</label>
        <input type="text" id="hscode_description" name="hscode_description" required>
      </div>
      <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>
      </div>
      <div class="form-group">
        <label for="unit">Unit:</label>
        <input type="text" id="unit" name="unit" required>
      </div>
      <div class="form-group">
        <label for="total_cif_value">Total CIF Value:</label>
        <input type="text" id="total_cif_value" name="total_cif_value" required>
      </div>
      <div class="form-group">
        <label for="mode_of_transport">Mode of Transport:</label>
        <select id="mode_of_transport" name="mode_of_transport" required>
          <option value="">Select Mode of Transport</option>
          <option value="sea">Sea</option>
          <option value="air">Air</option>
          <option value="land">Land</option>
        </select>
      </div>
      <div class="form-group">
        <label for="customs">Customs:</label>
        <input type="text" id="customs" name="customs" required>
      </div>
      <div class="form-group">
        <label for="customs_office">Customs Office:</label>
        <input type="text" id="customs_office" name="customs_office" required>
      </div>
      <div class="form-group">
        <label for="origin_country">Origin Country:</label>
        <input type="text" id="origin_country" name="origin_country" required>
      </div>
      <div class="form-group">
        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination" required>
      </div>
      <input type="submit" value="Submit">
    </form>
  </div>
  @endsection