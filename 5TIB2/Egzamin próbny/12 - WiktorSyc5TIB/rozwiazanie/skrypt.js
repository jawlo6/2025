https://ee-informatyk.pl/inf03-ee09/praktyka/EE.09-02-23.01-SG-rozwiazanie#google_vignette

<script>
46.	            var currentImageIndex = 0;
47.	            var imageArray = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg'];
48.	    
49.	            function prevImage() {
50.	                currentImageIndex = (currentImageIndex - 1 + imageArray.length) % imageArray.length;
51.	                updateImage();
52.	            }
53.	    
54.	            function nextImage() {
55.	                currentImageIndex = (currentImageIndex + 1) % imageArray.length;
56.	                updateImage();
57.	            }
58.	    
59.	            function changeImage(imageName) {
60.	                currentImageIndex = imageArray.indexOf(imageName);
61.	                updateImage();
62.	            }
63.	    
64.	            function updateImage() {
65.	                var galleryImage = document.getElementById('galleryImage');
66.	                galleryImage.src = imageArray[currentImageIndex];
67.	            }
68.	        </script>
69.	