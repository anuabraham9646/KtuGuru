<?php
include_once('../db connection.php');
session_start();

if(isset($_POST['up']))
{

	$email = $_SESSION['EMAIL_ID'];
$subject_id = $_SESSION['SUBJECT_ID'];
$topic= $_SESSION['topic'];

$target= "material/";
$target = $target . basename( $_FILES['content']['name']);

$Filename=basename( $_FILES['content']['name']);



if(move_uploaded_file($_FILES['content']['tmp_name'], $target)) {
    //Tells you if its all ok
    echo "The file ". basename( $_FILES['content']['name']). " has been uploaded, and your information has been added to the directory";


	$review= 1;

	$q= "insert into `studentstudy` (`STUDY_ID`, `EMAIL_ID`, `SUBJECT_ID`, `TOPIC`, `CONTENT`, `REVIEW`) VALUES (NULL, '$email', '$subject_id', '$topic', '$Filename', '0')";

	$i=mysqli_query($con,$q);
    echo $i;
	mysqli_close($con);
	header("Location:CS101engphy-2.php");

}
else {
    //Gives and error if its not
    echo "Sorry, there was a problem uploading your file.";
}


}
elseif(isset($_POST['topic']))
{
	$email = $_SESSION['EMAIL_ID'];
$subject_id = $_SESSION['SUBJECT_ID'];
$topic= $_POST['topic'];
$_SESSION['topic']= $topic;
  
  echo '<form action="CS101engphy-2upload.php" method="post" enctype="multipart/form-data">
      Insert Contents for ' .$topic. ' here <input type="file" name="content" required="yes">
      <input type="submit" name="up" value="submit">
     </form>';

}
?><!DOCTYPE html>
<html>
<head>
	<title>Engineering physics</title>
</head>
<body>
	<h1><center>Course No: PH100
	</br>Course Name:ENGINEERING PHYSICS</center></h1>
	<h2><u>Course Objectives:</u></h2>
	Most of the engineering disciplines are rooted in Physics. In fact a good engineer is more or less an applied physicist. This course is designed to provide a bridge to the world of technology from the basics of science and to equip the students with skills in scientific inquiry, problem solving, and laboratory techniques. 
		
	<h2><u>Expected outcome</u></h2>
	Familiarity with the principles of Physics and its significance in engineering systems and technological advances. 
	<center>
	<h1><hr><font color="blue">UPLOAD NOTES FOR ANY TOPIC BY CLICKING ON IT<hr></font>
	</center>
	
	<form action="CS101engphy-2upload.php" method="post">
	<h1>MODULE 1:</h1>


	</br><input type="submit" name ="topic" value="Harmonic Oscillations" style="background-color: transparent; border-color: transparent; cursor: default;"></input>: 

	<input type="submit" name ="topic" value="Differential equation of damped harmonic oscillation" style="background-color: transparent; border-color: transparent; cursor: default;"></input>,

	<input type="submit" name ="topic" value="forced harmonic oscillation and their solutions" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

	<input type="submit" name ="topic" value="Resonance" style="background-color: transparent; border-color: transparent; cursor: default;"></input>,

	<input type="submit" name ="topic" value="Qfactor" style="background-color: transparent; border-color: transparent; cursor: default;"></input>,

	<input type="submit" name ="topic" value="Sharpness of resonance" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

	<input type="submit" name ="topic" value="LCR circuit as an electrical analogue of Mechanical Oscillator (Qualitative)" style="background-color: transparent; border-color: transparent; cursor: default;"></input>


	</br><input type="submit" name="topic" value="Waves" style="background-color: transparent; border-color: transparent; cursor: default;"></input>:

	<input type="submit" name ="topic" value="One dimensional wave" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

	<input type="submit" name ="topic" value="differential equation and solution" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

	<input type="submit" name ="topic" value="Three dimensional waves" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

	<input type="submit" name ="topic" value="Differential equation & its solution" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.(No derivation)

	<input type="submit" name ="topic" value="Transverse vibrations of a stretched string" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.


	<br/><h1>MODULE 2:</h1>
	</br><input type="submit" name ="topic" value="Interference" style="background-color: transparent; border-color: transparent; cursor: default;"></input>:

	<input type="submit" name ="topic" value="Coherence" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

	<input type="submit" name ="topic" value="Interference in thin films and wedge shaped films" style="background-color: transparent; border-color: transparent; cursor: default;"></input>(Reflected system)

	<input type="submit" name ="topic" value="Newtons rings" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="measurement of wavelength and refractive index of liquid Interference filters" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value="Antireflection coating" style="background-color: transparent; border-color: transparent; cursor: default;"></input>

		<br/><input type="submit" name ="topic" value="Diffraction Fresnel and Fraunhofer diffraction" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value="Fraunhofer diffraction at a 15% single slit" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value="Plane transmission grating" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value="Grating equation" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value="measurment of wavelength" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value="Rayleighs criterion for resolution of grating" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Resolving power and dispersive power of grating" style="background-color: transparent; border-color: transparent; cursor: default;"></input>

	
	<br/><h1>MODULE 3:</h1>
	<br/>Polarization of Light: Types of polarized light. Double refraction. Nicol Prism. Quarter wave plate and half wave plate. Production and detection of circularly and elliptically polarized light. Induced birefringence- Kerr Cell - Polaroid & application
	</br>Superconductivity: Superconducting phenomena. Meissner effect. Type-I and Type-II superconductors. BCS theory (qualitative). High temperature superconductors - Josephson Junction - SQUID- Applications of superconductors.


	<br/><h1>MODULE 4:</h1>
	</br>Quantum Mechanics: Uncertainty principle and its applicationsformulation of Time dependent and Time independent Schrödinger equations- physical meaning of wave function- Energy and momentum Operators-Eigen values and functions- One dimensional infinite square well potential .Quantum mechanical Tunnelling (Qualitative) 
	</br>Statistical Mechanics: Macrostates and Microstates. Phase space. Basic postulates of Maxwell- Boltzmann, Bose-Einstein and Fermi Dirac statistics. Distribution equations in the three cases (no derivation). Fermi Level and its significance.




	<br/><h1>MODULE 5:</h1>
	</br>Acoustics: Intensity of sound- Loudness-Absorption coefficient - Reverberation and reverberation time- Significance of reverberation timeSabines formula (No derivation) -Factors affecting acoustics of a building
	</br>Ultrasonics: Production of ultrasonic waves - Magnetostriction effect and 20%Piezoelectric effect - Magnetostriction oscillator and Piezoelectric oscillator - Detection of ultrasonics - Thermal and piezoelectric methodsApplications of ultrasonics - NDT and medical.



	<br/><h1>MODULE 6:</h1>
	</br>Laser: Properties of Lasers, absorption, spontaneous and stimulated emissions, Population inversion, Einstein’s coefficients, Working principle of laser,Optial resonant cavity. Ruby Laser, Helium-Neon Laser, Semiconductor Laser (qualitative). Applications of laser, holography(Recording and reconstruction) 
	</br>Photonics: Basics of solid state lighting - LED– Photodetectors - photo voltaic cell, junction & avalanche photo diodes, photo transistors, thermal detectors, Solar cells- I-V characteristics - Optic fibre-Principle of propagation-numerical aperture-optic communication system (block diagram) - Industrial, medical and technological applications of optical fibre. Fibre optic sensors - Basics of Intensity modulated and phase modulated sensors. 
	</form>

<h2><u>References:</u></h2>
	<ul type=square>
	<li>Aruldhas, G., Engineering Physics, PHI Ltd. </li><li>Beiser, A., Concepts of Modern Physics, McGraw Hill India Ltd.</li>
	<li>Bhattacharya and Tandon, Engineering Physics , Oxford India</li><li>Brijlal and Subramanyam, A Text Book of Optics, S. Chand & Co.</li>
	<li>Dominic and Nahari, A Text Book of Engineering Physics, Owl Books Publishers</li><li>Hecht, E., Optics, Pearson Education</li>
	<li>Mehta, N., Applied Physics for Engineers, PHI Ltd</li><li>Palais, J. C., Fiber Optic Communications, Pearson Education</li>
	<li>Pandey, B. K. and Chathurvedi, S., Engineering Physics, Cengage Learning</li><li>Philip, J., A Text Book of Engineering Physics, Educational Publishers</li>
	<li>Premlet, B., Engineering Physics, Mc GrawHill India Ltd</li><li>Sarin, A. and Rewal, A., Engineering Physics, Wiley India Pvt Ltd</li>
	<li>Sears and Zemansky, University Physics , Pearson</li><li>Vasudeva, A. S., A Text Book of Engineering Physics, S. Chand & Co </li></ul>


	<!--<center>
	<h1></br></br><hr><font color="blue">Upload notes?</font>
	<form action="CS101engphy-2.php" method="post">
	</br><input type="button" name="upload" value="upload" ></input><hr></h1> 
	</form>
	</center>-->
</body>
</html>