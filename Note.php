<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Notes | Make Note</title>
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
          <a class="btn btn-Note" role="button">&nbsp; <i class="bi bi-plus-lg"></i> Note &nbsp; </a>
      </div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="floatingInput" placeholder="Write Note Title">
          <label for="floatingInput">Note Title</label>
        </div>

        <!-- TinyMCE Editor -->
        <textarea class="tinymce-editor">
          <p>👉 Write Note here ...</p>
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
