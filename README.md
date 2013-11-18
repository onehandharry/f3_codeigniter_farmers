f3_codeigniter_farmers
======================

Using CodeIgniter 2.1.4 (included in the repo)

database.php sensitive values removed.

Features
======================

 -Add Farmer (Name, County)
 
 -Add Stock (Name, Owner)
 
 -View stock of each farmer
 
 -Add todays production for the stock
 
 -Top ranking cows by weekly output
 
 -Top ranking farmers by combined weekly output
 
 -Top ranking farmers by average daily milk production
 



		
Side notes
======================
 -CSRF added for the Ajax query but feature turned off globally
 
 -Pagination total rows return is hard coded - needs value from row count 


To Do
======================
 -Ideally create a function to generate meta tags / title etc
 
 -Modify the stock production page to include back dating / editing
 
 -Removing stock from farmers	
 
 -Create a UID for the day+farmer+cow_id to ensure once a entry for the day is added it cannot be duplicated
   (add a where date(today) is not null)

		
		
Credits 
======================
Dummy data from - http://www.generatedata.com/ 

Pagination - http://tutsforweb.blogspot.co.uk/2012/02/codeigniter-pagination.html	

