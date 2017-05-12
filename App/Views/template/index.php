<?php include VIEWS_PATH . '/template/header.php';?>
<!-- ......................................... -->
<?php include VIEWS_PATH . '/template/navbar.php';?>

<div class="container">

     <div class="row">
      <div class="col-lg-12">

        <div class="bs-component">
          <div class="jumbotron">
            <h1>Eventos</h1>
            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum .</p>
            <p><a class="btn btn-primary btn-lg">Agregar Nuevo</a></p>
          </div>
        </div>
      </div>
    </div>


  <!-- Tables
================================================== -->
  <div class="bs-docs-section">

    <div class="col-lg-12">
        <div class="bs-component">
          <div class="well well-sm">
  <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="tables">Eventos Proximos</h1>
        </div>

        <div class="bs-component">
          <table class="table table-striped table-hover table-sm table-responsive ">
            <thead>
              <tr>
                <th>#</th>
                <th>Column heading</th>
                <th>Column heading</th>
                <th  class="text-center">HEading </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Column content</td>
                <td class="text-center"><span class="label label-primary">Primary</span></td>
                    <td  class="text-center">
     <a href="javascript:void(0)" class="btn btn-xs btn-info">x</a>
    <a href="javascript:void(0)" class="btn btn-xs btn-danger">x</a>
                 </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Column content</td>
                <td>Column content</td>
                <td  class="text-center">
     <a href="javascript:void(0)" class="btn btn-xs btn-info">x</a>
    <a href="javascript:void(0)" class="btn btn-xs btn-danger">x</a>
                 </td>
              </tr>
              <tr class="">
                <td>3</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr class="">
                <td>4</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr class="">
                <td>5</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr class="">
                <td>6</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
              <tr class="">
                <td>7</td>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /example -->
      </div>
    </div>
               </div>
        </div>
      </div>


  </div>
</div>
  <div class="row">

  <div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Well done!</strong> You successfully read
  <a href="javascript:void(0)" class="alert-link">this important alert message</a>.
</div>

  </div>




  <!-- Forms
================================================== -->
  <div class="bs-docs-section">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1 id="forms">Forms</h1>
        </div>
      </div>
    </div>

  </div>




  <!-- Containers
================================================== -->
  <div class="bs-docs-section">




  <!-- Modal
================================================== -->

  <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Formulario</button>

<!-- Modal -->




<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

       </div>

      <div class="modal-body">
       <div cl-ass="col-lg-6">
           <form class="form-horizontal">
            <fieldset>
              <legend>Legend</legend>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                  <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"><span class="checkbox-material"><span class="check"></span></span> Checkbox
                    </label>
                  </div>
                  <br>
                  <div class="togglebutton">
                    <label>
                      <input type="checkbox" checked=""><span class="toggle"></span> Toggle button
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputFile" class="col-lg-2 control-label">File</label>
                <div class="col-lg-10">
                  <div class="form-control-wrapper fileinput">
                    <input type="text" readonly="" class="form-control empty">
                    <input type="file" id="inputFile" multiple="">
                    <div class="floating-label">Browse...</div><span class="material-input"></span></div>

                </div>
              </div>

              <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                <div class="col-lg-10">
                  <textarea class="form-control" rows="3" id="textArea"></textarea>
                  <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Radios</label>
                <div class="col-lg-10">
                  <div class="radio radio-primary">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""><span class="circle"></span><span class="check"></span> Option one is this
                    </label>
                  </div>
                  <div class="radio radio-primary">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"><span class="circle"></span><span class="check"></span> Option two can be something else
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="select" class="col-lg-2 control-label">Selects</label>
                <div class="col-lg-10">
                  <select class="form-control" id="select">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                  <br>
                  <select multiple="" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>
       </div>
      <div class="col-lg-4 col-lg-offset-1">

      </div>


      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>



    <div id="modal_test" class="modal " role="">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body…</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<button type="button" class="btn btn-default" data-content="This is a snackbar! Lorem lipsum dolor sit amet..." data-toggle="snackbar" data-timeout="0">Show snackbar</button>

<button type="button" class="btn btn-default" data-style="toast" data-content="This is a toast! Lorem lipsum dolor sit amet..." data-toggle="snackbar" data-timeout="0" data-snackbar-id="snackbar1479059886340">Show toast<div class="ripple-container"></div></button>


<span data-toggle=snackbar
      data-content="Some text"
      data-style="toast"
      data-timeout="100"
      data-html-allowed="true">
Click me
</span>

<!-- ......................................... -->
<?php include VIEWS_PATH . '/template/footer.php';?>



