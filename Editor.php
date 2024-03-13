<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Notes | Edit</title>
    <meta content="See your 'Notes' here ..." name="description" />

    <!-- Favicons -->
    <link href="assets/img/Note_Logo.png" rel="icon" />
    <link href="assets/img/Note_Logo.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="Main">
      <div class="Editor">
        <div class="mb-2 text-end">
          <a class="btn btn-Note" role="button">&nbsp; Save <i class="bi bi-body-text"></i> &nbsp; </a>
      </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" value="Write Note Title">
          <label for="floatingInput">Note Title</label>
        </div>

        <!-- TinyMCE Editor -->
        <textarea class="tinymce-editor">
          <blockquote>
            <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. <strong>Consectetur suscipit deserunt non modi natus</strong> <span style="text-decoration: underline;">consequatur</span>, dolor, <em>perspiciatis</em> <s>doloremque</s> itaque <span style="font-family: symbol;">laudantium</span> amet <span style="font-size: 18pt; font-family: 'comic sans ms', sans-serif;">eaque</span> aliquid <a href="bgr">ducimus</a> quia?</p>
          </blockquote>
        </textarea><!-- End TinyMCE Editor -->
      </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>
</html>
