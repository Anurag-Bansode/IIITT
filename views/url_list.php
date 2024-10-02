
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
            <td>
               <a href="<?php echo htmlspecialchars($url['url']); ?>" target="_blank">
               <?php echo htmlspecialchars($url['url']); ?>
                </a>
            </td>
            <td>
            <a href="r.php?c=<?php echo htmlspecialchars($url['shortend_url']); ?>" target="_blank">
               <?php echo htmlspecialchars($url['shortend_url']); ?>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
