<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
    background-color: #f8f9fa;
}

.form-horizontal {
    width: 50%;
    margin: auto;
    border: 1px solid #ced4da; /* Menambahkan border pada formulir */
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

legend {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
    border-bottom: 2px solid #007bff; /* Menambahkan border bawah pada legend */
    padding-bottom: 10px;
}

.form-group {
    margin-bottom: 20px;
    border-bottom: 1px solid #ced4da; /* Menambahkan border bawah pada setiap form group */
    padding-bottom: 15px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 5px;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

h3 {
    margin-bottom: 10px;
    font-size: 20px;
    border-bottom: 2px solid #007bff; /* Menambahkan border bawah pada heading */
    padding-bottom: 10px;
}

p {
    font-size: 16px;
}
    </style>
</head>

<body>
    <form action="p_form.php" class="form-horizontal" id="registrationForm">
        <fieldset>

            <!-- Form Name -->
            <legend>FORM PENDAFTARAN</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Nama Lengkap</label>
                <div class="col-md-4">
                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="umur">Umur</label>
                <div class="col-md-4">
                    <input id="umur" name="umur" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">Gender</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="radios-0">
                        <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
                        Laki-laki
                    </label>
                    <label class="radio-inline" for="radios-1">
                        <input type="radio" name="radios" id="radios-1" value="2">
                        Perempuan
                    </label>
                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Pendidikan</label>
                <div class="col-md-4">
                    <select id="selectbasic" name="selectbasic" class="form-control">
                        <option value="1">SD</option>
                        <option value="2">SMP</option>
                        <option value="3">SMA</option>
                        <option value="4">Dl</option>
                        <option value="5">Dll</option>
                        <option value="6">Dlll</option>
                        <option value="7">S1</option>
                        <option value="8">S2</option>
                        <option value="9">S3</option>
                    </select>
                </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="checkboxes">Hobi</label>
                <div class="col-md-4">
                    <label class="checkbox-inline" for="checkboxes-0">
                        <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                        Baca Buku
                    </label>
                    <br>
                    <label class="checkbox-inline" for="checkboxes-1">
                        <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
                        Travelling
                    </label>
                    <br>
                    <label class="checkbox-inline" for="checkboxes-2">
                        <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
                        Olahraga
                    </label>
                    <br>
                    <label class="checkbox-inline" for="checkboxes-3">
                        <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4">
                        Nonton
                    </label>
                    <br>
                    <label class="checkbox-inline" for="checkboxes-4">
                        <input type="checkbox" name="checkboxes" id="checkboxes-4" value="5">
                        Naik Gunung
                    </label>
                    <br>
                    <label class="checkbox-inline" for="checkboxes-5">
                        <input type="checkbox" name="checkboxes" id="checkboxes-5" value="6">
                        Mancing
                    </label>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn btn-primary" onclick="showOutput()">Daftar</button>
                </div>
            </div>

        </fieldset>
    </form>
    </div>
</body>

</html>
