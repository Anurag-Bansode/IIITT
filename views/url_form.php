<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="urlform.css">
    <title>Shorten URL</title>
</head>

<body>
    <header>
        <h1 class="header">Shorten Your link</h1>
    </header>
    <div class="container mt-5">
        <form method="POST" action="index.php?action=submit">
            <div class="form-group">

                <div class="search-bar">
                    <input type="text" class="form-control" style="border-radius:4rem;" id="urlinput"
                        name="urlinput" placeholder="Enter URL" required>
                </div>

                <div class="shorten-btn">
                    <button type="submit" class="btn btn-primary" style="max-height: 40px;min-width: 115px;">Shorten URL</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>