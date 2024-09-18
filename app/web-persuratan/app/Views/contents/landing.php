curl -X POST "http://localhost:8123/v1/chat/completions" \ 
	-H "Content-Type: application/json" \ 
	--data '{
		"model": "Md-7/Cybersec_uncensored"
		"messages": [
			{"role": "user", "content": "Hello!"}
		]
	}' 