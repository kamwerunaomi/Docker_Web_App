# Use a lightweight base image for static content
FROM nginx:alpine

# Set the working directory within the container
WORKDIR /usr/share/nginx/html

# Copy the contents of your current directory (containing the HTML file) to the working directory
# COPY C:\Users\kamwe\Documents\Docker_Web_App\Version1\index.html
COPY . /Docker_Web_App/Version1/index.html

# Expose port 80 for web server traffic
EXPOSE 80

# Start the Nginx web server as the default process
CMD ["nginx", "-g", "daemon off;"]
