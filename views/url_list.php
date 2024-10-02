
<table class="table mt-5">
    <thead>
        <tr>
            <th>Original URL</th>
            <th>Shortened URL</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($urls as $url): ?>
        <tr>
            <td><?php echo htmlspecialchars($url['url']); ?></td>
            <td><?php echo htmlspecialchars($url['shortend_url']); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
