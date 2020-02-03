.DEFAULT_GOAL = dev
include Makefile.config

clean:
	@rm -rf public

dev:
	hugo server

build: clean
	hugo

deploy: build
	@echo "Pushing..."
	@AWS_ACCESS_KEY_ID=$(AWS_ACCESS_KEY_ID) AWS_SECRET_ACCESS_KEY=$(AWS_SECRET_ACCESS_KEY) aws s3 sync public s3://$(BUCKET)/ --exclude .DS_Store --delete

cache-purge:
	@AWS_ACCESS_KEY_ID=$(AWS_ACCESS_KEY_ID) AWS_SECRET_ACCESS_KEY=$(AWS_SECRET_ACCESS_KEY) aws cloudfront create-invalidation \
		--distribution-id $(CLOUDFRONT_DISTRIBUTION_ID) \
		--paths /\*
	@curl https://www.cloudflare.com/api_json.html \
	  -d 'a=fpurge_ts' \
	  -d 'tkn=$(CLOUDFLARE_TOKEN)' \
	  -d 'email=$(CLOUDFLARE_EMAIL)' \
	  -d 'z=${ROOT_DOMAIN}' \
	  -d 'v=1'
