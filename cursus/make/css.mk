###
### Make css related stuff
###

sass := /usr/bin/sass

# ============================================================================ #

scss_dir := assets-src/scss
scss_files := $(shell find $(scss_dir) -maxdepth 1 -name "*.scss" -not -name "_*")

css_dir := $(pubdir)/assets/css
css_files := $(addprefix $(css_dir)/,$(notdir $(scss_files:.scss=.css)))

# ---------------------------------------------------------------------------- #

css: $(css_files) fonts

$(css_dir):
	mkdir -p $@

$(css_dir)/%.css: $(scss_dir)/%.scss | $(css_dir) $(sass)
	$(sass) --scss $< $@

# ============================================================================ #

$(sass):
	sudo dnf install -y rubygem-sass.noarch

# ============================================================================ #

.PHONY: css clean-css

clean-css:
	rm -rf $(css_dir)/*
