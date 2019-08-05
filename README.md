# Convert String to C String

A tiny program to convert a file contents to C string with supporting multi-lines...

## Test

#### Output

```c
printf("%s", "\t\t<header class=\"navbar container\">\n");
printf("%s", "\t\t\t<section class=\"navbar-section\" style=\"padding:15px;\">\n");
printf("%s", "\t\t\t\t<img src=\"logo.svg\">\n");
printf("%s", "\t\t\t\t<form>\n");
printf("%s", "\t\t\t\t\t<div class=\"has-icon-left float-right\" style=\"padding-right:20px;\">\n");
printf("%s", "\t\t\t\t\t\t<input type=\"text\" class=\"form-input\" style=\"border:0px;border-bottom:2px solid #5755d9;\" placeholder=\"title...\">\n");
printf("%s", "\t\t\t\t\t</div>\n");
printf("%s", "\t\t\t\t\t<button class=\"btn btn-action btn-sm float-left\" style=\"border:0px;margin-right:-35px;margin-top:6px;\"><i class=\"icon icon-search\" style=\"margin-top:3px;\"></i></button>\n");
printf("%s", "\t\t\t\t</form>\n");
printf("%s", "\t\t\t</section>\n");
printf("%s", "\t\t\t<section class=\"navbar-center\">\n");
printf("%s", "\t\t\t\t<ul class=\"tab\">\n");
printf("%s", "\t\t\t\t\t<li class=\"tab-item active\">\n");
printf("%s", "\t\t\t\t\t\t<a href=\"#\">title</a>\n");
printf("%s", "\t\t\t\t\t</li>\n");
printf("%s", "\t\t\t\t\t<li class=\"tab-item\">\n");
printf("%s", "\t\t\t\t\t\t<a href=\"#\">title</a>\n");
printf("%s", "\t\t\t\t\t</li>\n");
printf("%s", "\t\t\t\t\t<li class=\"tab-item\">\n");
printf("%s", "\t\t\t\t\t\t<a href=\"#\">title</a>\n");
printf("%s", "\t\t\t\t\t</li>\n");
printf("%s", "\t\t\t\t</ul>\n");
printf("%s", "\t\t\t</section>\n");
printf("%s", "\t\t\t<section class=\"navbar-section\">\n");
printf("%s", "\t\t\t\t<a href=\"#\" class=\"btn btn-link\">title</a>\n");
printf("%s", "\t\t\t\t<a href=\"#\" class=\"btn btn-link\">title</a>\n");
printf("%s", "\t\t\t</section>\n");
printf("%s", "\t\t</header>\n");
```

#### Input

```
<header class="navbar container">
	<section class="navbar-section" style="padding:15px;">
		<img src="logo.svg">
		<form>
			<div class="has-icon-left float-right" style="padding-right:20px;">
				<input type="text" class="form-input" style="border:0px;border-bottom:2px solid #5755d9;" placeholder="title...">
			</div>
			<button class="btn btn-action btn-sm float-left" style="border:0px;margin-right:-35px;margin-top:6px;"><i class="icon icon-search" style="margin-top:3px;"></i></button>
		</form>
	</section>
	<section class="navbar-center">
		<ul class="tab">
			<li class="tab-item active">
				<a href="#">title</a>
			</li>
			<li class="tab-item">
				<a href="#">title</a>
			</li>
			<li class="tab-item">
				<a href="#">title</a>
			</li>
		</ul>
	</section>
	<section class="navbar-section">
		<a href="#" class="btn btn-link">title</a>
		<a href="#" class="btn btn-link">title</a>
	</section>
</header>
```
