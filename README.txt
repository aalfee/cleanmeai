**CleanMeAI**

Welcome to the cleanmeai repository. Visit the live website at (cleanmeai.com).

The application is launched on a simple index.html file with the bare necessities to run and function as a minimal viable product (MVP). The exported options are for documentation purposes only.

## 🧱 Tech Stack

| Layer         | Tech                                                    |
|---------------|----------------------------------------------------------|
| Frontend      | React, TypeScript, CSS                                   |
| Backend       | Django, Comma-Separated File                             |
| ML/AI         | Python, Pandas                                           |
| Database      | PostgreSQL, MondoDB                                      |
| DevOps        | Vercel, Github Pages, AWS                                |
| Simulation    | Unity                                                    |

---

## 🛠️ Setup

### Prerequisites

- Python 3.10+
- Node.js 18+
- Docker & Docker Compose
- Terraform & AWS CLI

### Backend Setup

```
bash
cd backend
python -m venv env
source env/bin/activate
pip install -r ../requirements.txt
python manage.py migrate
python manage.py runserver

Frontend Setup
bash
CopyEdit
cd frontend
npm install
npm run dev

Containerized (Dev Mode)
bash
CopyEdit
docker-compose up --build
```


To implement AI-driven Instagram-like stories for your app, focusing on various fields such as AI, education, social science, and community, you can follow these steps:

A. **User Engagement and Feedback Loop**
- **Analytics**: Implement AI-driven analytics to track which types of stories users interact with most. Use this data to improve content recommendations.
- **Feedback Loop**: Allow users to provide feedback on stories, which can be processed by NLP models to continually improve content generation and personalization.

B. **Tech Stack Suggestions**
- **Backend**: Use a Typescript backend (e.g., Javascript) or Node.js for managing AI models and APIs.
- **AI/ML Libraries**: TensorFlow, Hugging Face Transformers, OpenAI API (for summarization and content generation), NLTK, SpaCy, or GPT-based models for text generation (Chat-GPT4o).
- **Story Templates**: Design templates in HTML/CSS or use frameworks like Vercel for app development.
- **Database**: Use a NoSQL database (e.g., MongoDB) to store user preferences and interaction data.

C. Workflow
1. **Data Collection**: Fetch the latest data on facial recognition from trained AI model.
2. **Summarization**: Use an AI model (e.g., GPT-4o) to create a concise version of the event
3. **Visual Generation**: Use emojis for relevant image or infographic.
4. **Template Design**: Insert the summarized result and image outline into an overlay.
5. **User Personalization**: Track user interactions and recommend similar events in the future.

By leveraging AI to automate content generation, design, and personalization, you can provide a dynamic and engaging news experience for your users, similar to Instagram Events but with educational and news-focused content.
