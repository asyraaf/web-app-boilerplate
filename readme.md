# Training Management System (TManSys)

## TODO 

1. Add relationship between models
2. Workflow
	As Administrator
		manage trainings, annoucement, newsletter, email blast
	As Trainer
		upload slide, materials, portfolio, syllabus
	As Organizer
		update locations, training details, set castmycode id
	As Participant
		check in, feedback, testimonial, subscribe to training

```
trainings [done]
	id
	trainer_id
	venue_id
	date_start
	date_end
	time_start
	time_end
	status

venues [done]
	id
	name
	latitude
	longitude

roles [done]
	administrator
	trainer
	facilitator
	participant

users [done]
	id
	name
	ic
	email
	phone

training_participants [done]
	training_id
	user_id
	absence 
		(default 0)
		1 - absence
	status
		(default 0)
		1 - accomplished
	feedback
	testimonial

training_facilitators [done]
	facilitator_id
	user_id
```