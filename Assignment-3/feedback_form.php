<!DOCTYPE html>
<html>

<head>
	<title>Sending file attachment with email</title>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
	</script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
	<style>
		form {
			box-shadow: 10px 10px 40px grey;
			padding: 50px;
			margin: 20px;
			
			
		}
		/* *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
} */
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-color: #ffb851;
}
.rating-box {
  padding: 25px 50px;
  background-color: #f1f1f1;
  border-radius: 25px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.08);
  text-align: center;
}
.rating-box h3 {
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 20px;
}
.rating-box .stars {
  display: flex;
  align-items: center;
  gap: 25px;
}
.stars i {
  font-size: 35px;
  color: #b5b8b1;
  transition: all 0.2s;
  cursor: pointer;
}
.stars i.active {
  color: #ffb851;
  transform: scale(1.2);
}
	</style>
</head>

<body>

	
	<form method="post" action="feedback.php"
			enctype="multipart/form-data"
			class="w-75 mx-auto">
		<h1 class="text-success text-center">
		Faculty Feedback Form
		</h1>
		
		<!-- <h5 class="text-success text-center">
			Sending email with a
			file attachment
		</h5> -->
		
		<div class="form-group">
			<input type="text" name="name"
				class="form-control"
				placeholder="Student Name" required="">
		</div>
		<div class="form-group">
			<input type="number" name="enroll"
				class="form-control"
				placeholder="Enrollment No." required="">
		</div>

		<div class="form-group">
			<input type="email" name="email"
				class="form-control"
				placeholder="Email address" required="">
		</div>
		
		<div class="form-group">
			<input type="text" name="facultyname"
				class="form-control"
				placeholder=" Enter Faculty name" required="">
				<!-- <label for="facultyname">Choose a faculty name:</label> 
    <select name="facultyname" id="facultyname"> 
        <option value="rigatoni">Krunal Trivedi</option> 
        <option value="dave">Mehul Dave</option> 
        <option value="pumpernickel">Satyarj Bapu</option> 
        <option value="reeses">Raman kumar</option> 
    </select> -->
  

		</div>
		
		<div class="form-group">
			<textarea type="text" name="feedback_write" placeholder="Feedback Write..." cols="30" rows="3"></textarea>
		</div>
		<div class="rating-box">
      <h3>How was your experience?</h3>
      <div class="stars">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
    </div>
		<!-- <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div> -->
		<div class="submit text-center">
			<input type="submit" name="submit"
				class="btn btn-success "
				value="Submit">
		</div>
	
	</form>
	<script>
		const stars = document.querySelectorAll('.stars i');
const starsNone = document.querySelector('.rating-box');

// ---- ---- Stars ---- ---- //
stars.forEach((star, index1) => {
  star.addEventListener('click', () => {
    stars.forEach((star, index2) => {
      // ---- ---- Active Star ---- ---- //
      index1 >= index2
        ? star.classList.add('active')
        : star.classList.remove('active');
    });
  });
});
	</script>
</body>

</html>
