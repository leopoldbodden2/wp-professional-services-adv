<section id="awards" class="row">
    <div class="container">
		<?php
		/**
		 * Iterates over the directory /images/callouts
		 * and skips the ".." dot file
		 * @todo consider turning this into a theme function to easily drop galleries of images
		 */
		if(file_exists(get_template_directory().'/assets/images/awards')) {
			$files = array();
			$order = 0;
			foreach (new RecursiveDirectoryIterator(get_template_directory() . '/assets/images/awards', FilesystemIterator::SKIP_DOTS) as $file) {
				$order++;
				// check if the object we have is a file
				if ($file->isFile()) {
					// removes the extension from the file name
					$alt = str_replace($file->getExtension(), '', $file->getFilename());
					$numbers = [$order];
					// removes the 'ordering number(s)' in the file
					if (preg_match('/([\d]+\-)+/', $alt, $numbers)) {
						$alt = preg_replace('/([\d]+\-)+/', '', $alt);
					}
					// replaces hyphens with spaces
					$alt = str_replace('-', ' ', $alt);
					// converts to title case
					$alt = mb_convert_case($alt, MB_CASE_TITLE, 'UTF-8');

					// store for sorting and showing later
					$files[] = [
						$numbers[0],
						$file->getFilename(),
						$alt
					];

					// sort array
					asort($files);
				}
			}
			if(count($files)) {
				echo '<ul class="list-inline list-unstyled">';
				foreach ($files as $file) {
					// show it!
					?>
                    <li>
                        <img alt="<?= $file[2]; ?>"
                             src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                             data-src="<?= IMAGES; ?>/awards/<?= $file[1] ?>"
                             class="img-responsive center-block">
                    </li>
					<?php
				}
				echo '</ul>';
			}
		}
		?>
    </div>
</section>