<pre><?php print_r($_POST); ?></pre>
<html>
<head>
    <title>Insert Post</title>
</head>
<body>
    <form method="post">
        <p>
            <input type="text" name="post_title" />
        </p>
        <p>
            <textarea name="post_content"></textarea>
        </p>
        <p>
            <label for="post_category">Cat 1</label>
            <input type="checkbox" name="post_category" value="cat1" />
            <br />
            <label for="post_category">Cat 2</label>
            <input type="checkbox" name="post_category" value="cat2" />
        </p>
        <p>
            <input type="submit" value="Submit" />
        </p>
    </form>
</body>
</html>