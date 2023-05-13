<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{URL::to('/')}}/import2/assets/img/favicon.png" rel="icon">
  <link href="{{URL::to('/')}}/import2/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::to('/')}}/import2/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/import2/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/import2/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/import2/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/import2/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/import2/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/import2/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL::to('/')}}/import2/assets/css/style.css" rel="stylesheet">

 <style>

html{
  margin:0;
  padding:0;
  width:100%;
  height:100%;
}
body{
  width:100%;
  height:100%;
  font-family:Arial, sans-serif;
  font-size:16px;
  line-height:30px;
  padding:20px;
  margin:0;
}
.title{
  text-transform:uppercase
}
.form-heading {
  background: #e8cbc0; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #e8cbc0, #636fa4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  margin: 20px 0 20px;
   padding: 20px;
}
.form-heading .prg{
  color: #ffffff;
  font-size: 23px;
}

.inline{
  display:inline-block
}
label{
  min-width: 120px;
  position: relative;
  cursor: pointer;
  color: #666;
  font-size: 15px;
}

.checkbox label:after {
  content: '';
  display: table;
  clear: both;
}

.checkbox .cc {
  position: relative;
  display: inline-block;
  border: 1px solid #a9a9a9;
  border-radius: .25em;
  width: 1.3em;
  height: 1.3em;
  float: left;
  margin-right: .5em;
}

.checkbox .cc .cc-icon {
  position: absolute;
  font-size: .8em;
  line-height: 0;
  top: 50%;
  left: 15%;
}

.checkbox label input[type="checkbox"] {
  display: none;
}

.checkbox label input[type="checkbox"]+.cc>.cc-icon {
  opacity: 0;
}

.checkbox label input[type="checkbox"]:checked+.cc>.cc-icon {
  opacity: 1;
}

.checkbox label input[type="checkbox"]:disabled+.cc {
  opacity: .5;
}</style>
</head>


<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-9">
            <h1 class="title">fullfil medical card for the patient</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>patient name</h2>
            

        </div>
    </div>

    <form class="form-horizontal" role="form" method="post" action="">
        @csrf
        <div class='container'>

            <div class='row'>
                <div class="col-lg-12">
                    <div class="form-heading">
                        <span class="prg">Information contact &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; medical information </span>
                    </div>
                </div>
            </div>
            <div class='row'>

                <div class="col-lg-6">
                    <!--<form class="form-horizontal" role="form">-->
                    <div class="form-group">
                        <label for="civilite" class="col-sm-2 control-label">Marital status :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="maritalstatus" id="civilite" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nom" class="col-sm-2 control-label">FisrtName :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="firstname" id="name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prenom" class="col-sm-2 control-label">Last name :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="lastname" id="prenom" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mail" class="col-sm-2 control-label">Email :</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tel" class="col-sm-2 control-label">T&eacute;l&eacute;phone :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="phone" id="tel" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adress" class="col-sm-2 control-label">adress :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="adress" id="adress" required>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="tension" class="col-sm-2 control-label">blood tension</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="tension" id="tension" required>
                        </div>
                    </div>
                    <div class="form-group">

                        <label for="temperature" class="col-sm-2 control-label">tempreture</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="temperature" id="temperature" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cp" class="col-sm-2 control-label">height</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="height" id="height">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="weight" class="col-sm-2 control-label">weight</label>
                        <div class="col-sm-8">
                            <input type="text" name="weight" class="form-control" id="weight">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bloodtype" class="col-sm-2 control-label">blood type</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="blood" id="bloodtype">
                        </div>
                    </div><br>
                    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="Male" value="Male">
  <label class="form-check-label" for="Male">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="Female" value="Female">
  <label class="form-check-label" for="Female">Female</label>
</div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">

                    <div class="form-heading">

                        <span class="prg">Blood collection</span>
                    </div>

                    <div>

                        <div class="form-group">
                            <label for="programme" class="col-sm-2 control-label">blood volume to collect (bags)</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="volume">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" >
                            <label for="origine" class="col-sm-2 control-label">blood volume to collect max(bags)</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="volumemax">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <!--</form>-->

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="form-heading">

                        <span class="prg">doctor validation</span>
                    </div>

                    <label for="start">date:</label>

<input type="date" id="start" name="date"
       value="2023-05-22"
       min="2023-05-12" max="2050-12-31">
       <br><br>
       <div class="text fw-bold fst-italic">
       doctor validation :        
</div>             

                    </div>
 
                </div>

                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="comment">other information</label>
                        <textarea class="form-control" rows="5" id="comment" name="others"></textarea>
                    </div>
                </div>
<div class="row">
                <div class="col">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col">
                  <button type="button" class="btn btn-success">print</button>
                </div>
</div>
            </div>
        </div>
    </form>

</div>










