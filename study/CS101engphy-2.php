<?php
include_once('../db connection.php');
session_start();
if(isset($_POST['upload']) && isset($_SESSION['EMAIL_ID']))
{
	//echo"ghus gaya";
	header("Location:CS101engphy-2upload.php");
}
elseif (isset($_POST['home'])) {
	if(! isset($_SESSION['EMAIL_ID']))
            {
    header("Location:../home&afterlogin/home.html");}  
              else { 
              header("Location:../home&afterlogin/afterlogin.php");}
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
	<h1><hr><font color="blue">Upload notes? Or View Them By Clicking On The Topics</font>
	<form action="CS101engphy-2.php" method="post">
	</br><input type="submit" name="upload" value="UPLOAD" ></input></h2> 
	<center><input type="submit" name="home" value="HOME"></input></center><hr></h2>
	</form>
	</center>

	<form action="studyview.php" method="post">
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
	</br><input type="submit" name ="topic" value="Polarization of Light" style="background-color: transparent; border-color: transparent; cursor: default;"></input>:

	<input type="submit" name ="topic" value="Types of polarized light" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

	<input type="submit" name ="topic" value="Double refraction" style="background-color: transparent; border-color: transparent; cursor: default;"></input>

	<input type="submit" name ="topic" value="Nicol Prism" style="background-color: transparent; border-color: transparent; cursor: default;"></input>

		<input type="submit" name ="topic" value="Quarter wave plate and half wave plate" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value="Production and detection of circularly and elliptically polarized light" style="background-color: transparent; border-color: transparent; cursor: default;"></input>

		<br/><input type="submit" name ="topic" value="Induced birefringence" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Kerr Cell" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Polaroid & application" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.
<br/>
		<input type="submit" name ="topic" value="Superconductivity" style="background-color: transparent; border-color: transparent; cursor: default;"></input>:

		<input type="submit" name ="topic" value="Superconducting phenomena" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value="Meissner effect" style="background-color: transparent; border-color: transparent; cursor: default;"></input>

		<input type="submit" name ="topic" value="Type-I and Type-II superconductors" style="background-color: transparent; border-color: transparent; cursor: default;"></input>

		<input type="submit" name ="topic" value="BCS theory (qualitative)" style="background-color: transparent; border-color: transparent; cursor: default;"></input>:

		<input type="submit" name ="topic" value="High temperature superconductors " style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Josephson Junction" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="SQUID" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Applications of superconductors" style="background-color: transparent; border-color: transparent; cursor: default;"></input>



<br/><h1>MODULE 4:</h1>
	</br><input type="submit" name ="topic" value="Quantum Mechanics" style="background-color: transparent; border-color: transparent; cursor: default;"></input>:

	<input type="submit" name ="topic" value="Uncertainty principle and its applicationsformulation of Time dependent and Time independent Schrödinger equations" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

	<input type="submit" name ="topic" value="physical meaning of wave function" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

	<input type="submit" name ="topic" value="Energy and momentum Operators" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Eigen values and functions" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value="One dimensional infinite square well potential" style="background-color: transparent; border-color: transparent; cursor: default;"></input>

		<input type="submit" name ="topic" value="Quantum mechanical Tunnelling (Qualitative) " style="background-color: transparent; border-color: transparent; cursor: default;"></input><br>

		<input type="submit" name ="topic" value="Statistical Mechanics" style="background-color: transparent; border-color: transparent; cursor: default;"></input>:

		<input type="submit" name ="topic" value="Macrostates and Microstates" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value="Phase space. Basic postulates of Maxwell" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Boltzmann, Bose-Einstein and Fermi Dirac statistics" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value=" Distribution equations in the three cases (no derivation)" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value="Fermi Level and its significance" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.





<br/><h1>MODULE 5:</h1>
	</br><input type="submit" name ="topic" value="Acoustics" style="background-color: transparent; border-color: transparent; cursor: default;"></input>:

	<input type="submit" name ="topic" value="Intensity of sound" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

	<input type="submit" name ="topic" value="Loudness" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

	<input type="submit" name ="topic" value="Absorption coefficient" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Reverberation and reverberation time" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Significance of reverberation timeSabines formula (No derivation)" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Factors affecting acoustics of a building " style="background-color: transparent; border-color: transparent; cursor: default;"></input><br>

		<input type="submit" name ="topic" value="Ultrasonics" style="background-color: transparent; border-color: transparent; cursor: default;"></input>:

		<input type="submit" name ="topic" value=" Production of ultrasonic waves" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value="Magnetostriction effect and 20% Piezoelectric effect" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value=" Magnetostriction oscillator and Piezoelectric oscillator" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value=" Detection of ultrasonics " style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value="Applications of ultrasonics" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-
				<input type="submit" name ="topic" value="NDT and medical. " style="background-color: transparent; border-color: transparent; cursor: default;"></input>.
			



<br/><h1>MODULE 6:</h1>
	</br><input type="submit" name ="topic" value="Laser" style="background-color: transparent; border-color: transparent; cursor: default;"></input>:

	<input type="submit" name ="topic" value=" Properties of Lasers" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

	<input type="submit" name ="topic" value="absorption- spontaneous and stimulated emissions- Population inversion" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

	<input type="submit" name ="topic" value="Einstein’s coefficients" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Working principle of laser" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Optial resonant cavity" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Ruby Laser " style="background-color: transparent; border-color: transparent; cursor: default;"></input>

		<input type="submit" name ="topic" value="Helium-Neon Laser" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value=" Semiconductor Laser (qualitative)" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.

		<input type="submit" name ="topic" value=" Applications of laser" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value=" holography(Recording and reconstruction)" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.<br>

		<input type="submit" name ="topic" value=" Photonics " style="background-color: transparent; border-color: transparent; cursor: default;"></input>:

		<input type="submit" name ="topic" value="Basics of solid state lighting" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-
				<input type="submit" name ="topic" value=" LED– Photodetectors" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-


<input type="submit" name ="topic" value="photo voltaic cell, junction & avalanche photo diodes, photo transistors, thermal detectors" style="background-color: transparent; border-color: transparent; cursor: default;"></input>:

	<input type="submit" name ="topic" value=" I-V characteristics" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

	<input type="submit" name ="topic" value="Optic fibre" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

	<input type="submit" name ="topic" value="Principle of propagation" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="optic communication system (block diagram)" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Industrial, medical and technological applications of optical fibre" style="background-color: transparent; border-color: transparent; cursor: default;"></input>-

		<input type="submit" name ="topic" value="Fibre optic sensors " style="background-color: transparent; border-color: transparent; cursor: default;"></input>

		<input type="submit" name ="topic" value="Basics of Intensity modulated and phase modulated sensors" style="background-color: transparent; border-color: transparent; cursor: default;"></input>.



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
	
</body>
</html>