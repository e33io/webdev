# image grid web page

a simple web page for displaying a photo grid from a single directory - view a live example here: https://i.e33.io

### Notes

- images are auto-sorted by modified time, newest to oldest (based on modified time of files)
- upload image files to the `i` directory for the grid output (and remove the sample images)
- edit the `index.php` with your own details
- replace the `icon.svg`, `apple-touch-icon.png` and `assets/images/icon-630px.png` with your own icons
- the `index.php` and `.htaccess` files are setup to block search engine indexing, so edit as needed for SEO
- the CSS has typical typography and basic inline/block code styles, including styles for "Index of" pages
- dark theme by default, light theme activated with `prefers-color-scheme: light` CSS
- add extra HTML content within `<div class='container'>` after `<div class='img-grid'>...</div>`

### Tips

rsync images to your server
```
rsync --ignore-existing -av /home/user/Pictures/i user@your-server.com:/home/user/your-website-directory/
```

strip exif metadata and rsync images to your server
```
exiftool -overwrite_original -recurse -all= -TagsFromFile @ -ColorSpaceTags /home/user/Pictures/i && rsync --ignore-existing -av /home/user/Pictures/i user@your-server.com:/home/user/your-website-directory/
```

### License
[The Unlicense](https://github.com/e33io/webdev/blob/main/image-grid-web-page/LICENSE)
