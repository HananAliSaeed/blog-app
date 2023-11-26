Clone Repository

1: Clone the repository using git clone https://github.com/HananAliSaeed/blog-app.git.
Install Dependencies

2: Run composer install to install PHP dependencies.
Run npm install or yarn install for JavaScript dependencies.
Environment Configuration

3: Rename blog_app to .env.
Set up your database connection details in the .env file.
Database Setup

4: Run php artisan migrate to create the posts table.
Run php artisan db:seed --class=PostSeeder to seed the posts table.

5: Generate Application Key
Run php artisan key:generate to generate the application key.

6:Run Server
Start the server using php artisan serve.

7: CRUD Operations:

-GET /api/posts: Retrieve all blog posts.
-GET /api/posts/{id}: Retrieve a single blog post by ID.
-POST /api/posts: Create a new blog post.
-PUT /api/posts/{id}: Update an existing blog post by ID.
-DELETE /api/posts/{id}: Delete a blog post by ID.
