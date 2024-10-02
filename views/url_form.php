<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Shorten URL</title>
</head>
<body>
    <div class="container mt-5">
        <form method="POST" action="index.php?action=submit">
            <div class="form-group">
                <label for="urlinput">Enter URL</label>
                <input type="text" class="form-control" id="urlinput" name="urlinput" placeholder="Enter URL" required>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Shorten URL</button>
        </form>
    </div>
</body>
</html>
