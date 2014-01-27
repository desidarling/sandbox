<?php

use Illuminate\Database\Migrations\Migration;

class AddingSchools extends Migration 
{

        public function up()
        {
                DB::table('Schools')->insert(
                        array(
                                array('name' => 'Alabama A&M University'),
array('name' => 'Appalachian State University'),
array('name' => 'Arizona State University'),
array('name' => 'Auburn University'),
array('name' => 'Ball State University'),
array('name' => 'Baylor University'),
array('name' => 'Benemerita University Autonoma de Puebla'),
array('name' => 'Boise State University'),
array('name' => 'Boston College'),
array('name' => 'Boston University'),
array('name' => 'Bowling Green State University'),
array('name' => 'Brandeis University'),
array('name' => 'Brigham Young University'),
array('name' => 'Brown University'),
array('name' => 'Bryn Mawr College'),
array('name' => 'California State University, Long Beach'),
array('name' => 'Carnegie Mellon University'),
array('name' => 'Case Western Reserve University'),
array('name' => 'Catholic University of America'),
array('name' => 'Central Michigan University'),
array('name' => 'Centro de Investigacion y de Estudios'),
array('name' => 'Chinese Academy of Sciences'),
array('name' => 'City University of Hong Kong'),
array('name' => 'Clark University'),
array('name' => 'Clarkson University'),
array('name' => 'Clemson University'),
array('name' => 'College of William and Mary'),
array('name' => 'Colorado School of Mines'),
array('name' => 'Colorado State University'),
array('name' => 'Columbia University'),
array('name' => 'Cornell University'),
array('name' => 'Creighton University'),
array('name' => 'Dartmouth College'),
array('name' => 'DePaul University'),
array('name' => 'Drexel University'),
array('name' => 'Duke University'),
array('name' => 'East Carolina University'),
array('name' => 'Eastern Michigan University'),
array('name' => 'Emory University'),
array('name' => 'Florida Atlantic University'),
array('name' => 'Florida Institute of Technology'),
array('name' => 'Florida State University'),
array('name' => 'Fudan University'),
array('name' => 'George Washington University'),
array('name' => 'Georgetown University'),
array('name' => 'Georgia Institute of Technology'),
array('name' => 'Georgia State University'),
array('name' => 'Harvard University'),
array('name' => 'Howard University'),
array('name' => 'Indiana University - Purdue University Indianapolis'),
array('name' => 'Indiana University, Bloomington'),
array('name' => 'Iowa State University'),
array('name' => 'Johns Hopkins University'),
array('name' => 'Kansas State University'),
array('name' => 'Lehigh University'),
array('name' => 'Louisiana State University'),
array('name' => 'Louisiana Tech University'),
array('name' => 'Massachusetts Institute of Technology'),
array('name' => 'Miami University'),
array('name' => 'Michigan State University'),
array('name' => 'Michigan Technological University'),
array('name' => 'Minnesota State University, Mankato'),
array('name' => 'Mississippi State University'),
array('name' => 'Missouri University of Science & Technology'),
array('name' => 'Montana State University, Bozeman'),
array('name' => 'Montana Tech'),
array('name' => 'Nanjing University'),
array('name' => 'National Tsing Hua University'),
array('name' => 'New Jersey Institute of Technology'),
array('name' => 'New Mexico Institute of Mining and Technology'),
array('name' => 'New Mexico State University'),
array('name' => 'North Carolina State University, Raleigh'),
array('name' => 'Northeastern University'),
array('name' => 'Northern Arizona University'),
array('name' => 'Northern Illinois University'),
array('name' => 'Northwestern University'),
array('name' => 'Oakland University'),
array('name' => 'Ohio State University'),
array('name' => 'Ohio University'),
array('name' => 'Oklahoma State University'),
array('name' => 'Oregon State University'),
array('name' => 'Pennsylvania State University'),
array('name' => 'Pittsburg State University'),
array('name' => 'Portland State University'),
array('name' => 'Princeton University'),
array('name' => 'Purdue Universty'),
array('name' => 'Rensselaer Polytechnic Institute'),
array('name' => 'Rice University'),
array('name' => 'Rochester Institute of Technology'),
array('name' => 'Rutgers University, New Brunswick'),
array('name' => 'Ryerson University'),
array('name' => 'San Diego State University'),
array('name' => 'San Francisco State University'),
array('name' => 'San Jose State University'),
array('name' => 'Shanghai Jiao Tong University'),
array('name' => 'South Dakota School of Mines & Technology'),
array('name' => 'Southern Connecticut State University'),
array('name' => 'Stanford University'),
array('name' => 'State University of New York (SUNY), Albany'),
array('name' => 'State University of New York (SUNY), Binghamton'),
array('name' => 'State University of New York (SUNY), Stony Brook'),
array('name' => 'State University of New York (SUNY), Univ. at Buffalo'),
array('name' => 'Stevens Institute of Technology'),
array('name' => 'Syracuse University'),
array('name' => 'Texas Christian University'),
array('name' => 'Texas State University, San Marcos'),
array('name' => 'The Chinese University of Hong Kong'),
array('name' => 'The University of Hong Kong'),
array('name' => 'Tsinghua University'),
array('name' => 'Tufts University'),
array('name' => 'University of Akron'),
array('name' => 'University of Alabama at Birmingham'),
array('name' => 'University of Alabama, Tuscaloosa'),
array('name' => 'University of Alaska Fairbanks'),
array('name' => 'University of Arizona'),
array('name' => 'University of Arkansas'),
array('name' => 'University of California Merced'),
array('name' => 'University of California, Berkeley'),
array('name' => 'University of California, Davis'),
array('name' => 'University of California, Irvine'),
array('name' => 'University of California, Los Angeles'),
array('name' => 'University of California, Riverside'),
array('name' => 'University of California, San Diego'),
array('name' => 'University of California, Santa Cruz'),
array('name' => 'University of Central Florida'),
array('name' => 'University of Chicago'),
array('name' => 'University of Cincinnati'),
array('name' => 'University of Colorado, Boulder'),
array('name' => 'University of Connecticut'),
array('name' => 'University of Dayton'),
array('name' => 'University of Delaware'),
array('name' => 'University of Denver'),
array('name' => 'University of Florida'),
array('name' => 'University of Houston'),
array('name' => 'University of Illinois, Chicago'),
array('name' => 'University of Illinois, Urbana-Champaign'),
array('name' => 'University of Iowa'),
array('name' => 'University of Kansas'),
array('name' => 'University of Kentucky'),
array('name' => 'University of Maine'),
array('name' => 'University of Maryland, Baltimore County'),
array('name' => 'University of Maryland, College Park'),
array('name' => 'University of Massachusetts, Amherst'),
array('name' => 'University of Massachusetts, Lowell'),
array('name' => 'University of Miami'),
array('name' => 'University of Michigan'),
array('name' => 'University of Minnesota, Duluth'),
array('name' => 'University of Missouri, Columbia'),
array('name' => 'University of Missouri, St. Louis'),
array('name' => 'University of Nebraska, Lincoln'),
array('name' => 'University of Nevada, Las Vegas'),
array('name' => 'University of Nevada, Reno'),
array('name' => 'University of New Hampshire'),
array('name' => 'University of New Mexico'),
array('name' => 'University of North Carolina, Chapel Hill'),
array('name' => 'University of North Dakota'),
array('name' => 'University of North Texas'),
array('name' => 'University of Notre Dame'),
array('name' => 'University of Oklahoma'),
array('name' => 'University of Oregon'),
array('name' => 'University of Pennsylvania'),
array('name' => 'University of Pittsburgh'),
array('name' => 'University of Rochester'),
array('name' => 'University of South Carolina'),
array('name' => 'University of South Dakota'),
array('name' => 'University of South Florida'),
array('name' => 'University of Southern California'),
array('name' => 'University of Tennessee, Knoxville'),
array('name' => 'University of Texas at Austin'),
array('name' => 'University of Texas, Arlington'),
array('name' => 'University of Texas, Brownsville'),
array('name' => 'University of Texas, Dallas'),
array('name' => 'University of Texas, El Paso'),
array('name' => 'University of Texas, San Antonio'),
array('name' => 'University of Toledo'),
array('name' => 'University of Utah'),
array('name' => 'University of Vermont'),
array('name' => 'University of Virginia'),
array('name' => 'University of Washington'),
array('name' => 'University of Wisconsin, Madison'),
array('name' => 'University of Wisconsin, Milwaukee'),
array('name' => 'University of Wyoming'),
array('name' => 'Utah State University'),
array('name' => 'Vanderbilt University'),
array('name' => 'Virginia Commonwealth University'),
array('name' => 'Virginia Tech'),
array('name' => 'Wake Forest University'),
array('name' => 'Washington State University'),
array('name' => 'Wayne State University'),
array('name' => 'West Virginia University'),
array('name' => 'Western Michigan University'),
array('name' => 'Worcester Polytechnic Institute'),
array('name' => 'Wright State University')
                      
                        ));
        }

        public function down()
        {
                DB::table('Schools')->delete();
        }

}


