<section id="form-message" class="section">

<h2 class="section-title">Form Message<code>forms/form-message.less</code></h2>
<form role="form">
	<label for="title">Title</label>
	<input type="text" id="title" placeholder="Title">
	<p class="form-message">Title description</p>
	<label for="first-name">First Name</label>
	<input type="text" id="first-name" placeholder="Enter First Name" value="Scott">
	<p class="form-message success">Cool first name</p>
	<label for="last-name">Last Name</label>
	<input type="text" id="last-name" placeholder="Enter Last Name">
	<p class="form-message error">Please enter a last name</p>
	<label for="email">Email</label>
	<input type="email" id="email" placeholder="Enter Email">
	<p class="form-message info">Email address must include "@"</p>
	<label for="password">Password</label>
	<input type="password" id="password" placeholder="Enter Password" value="password">
	<p class="form-message warning">Medium strengh password</p>
	<button type="submit" class="button">Submit</button>
</form>

<pre class="language-less"><code class="language-less"><?php echo htmlentities('@form-message-margin: @label-margin;
@form-message-font-family: @paragraph-font-family;
@form-message-font-weight: @paragraph-font-weight;
@form-message-font-size: 1.2;
@form-message-color: @body-color;
@form-message-line-height: @paragraph-line-height;

@form-message-error-color: @error;
@form-message-warning-color: @warning;
@form-message-success-color: @success;
@form-message-info-color: @info;'); ?></code></pre>

<pre class="language-markup"><code class="language-markup"><?php echo htmlentities('<form role="form">
	<label for="first-name">First Name</label>
	<input type="text" id="first-name" placeholder="Enter First Name" value="Scott">
	<p class="form-message success">Cool first name</p>
	<label for="last-name">Last Name</label>
	<input type="text" id="last-name" placeholder="Enter Last Name">
	<p class="form-message error">Please enter a last name</p>
	<label for="email">Email</label>
	<input type="email" id="email" placeholder="Enter Email">
	<p class="form-message info">Email address must include "@"</p>
	<label for="password">Password</label>
	<input type="password" id="password" placeholder="Enter Password" value="password">
	<p class="form-message warning">Medium strengh password</p>
	<button type="submit" class="button">Submit</button>
</form>'); ?></code></pre>

</section>