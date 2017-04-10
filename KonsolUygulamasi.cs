using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            int i = 0;
            string id = "";
            string data = File.ReadAllText("data.txt");
            string[] splittedData = data.Split('~');
            List<Parfumes> myParfumes = new List<Parfumes>();
            List<Parfumes> resultParfume = new List<Parfumes>();

            foreach (var item in splittedData)
            {
                List<string> properties = item.Split(';').ToList();
                Parfumes Parfume = new Parfumes(i++, properties[0].Trim());
                properties.RemoveAt(0);
                foreach(var property in properties)
                {
                    try
                    {
                        string[] splittedProp = property.Split(':');
                        Parfume.addProp(splittedProp[0].Trim(), Convert.ToInt32(splittedProp[1].Trim()));
                    }
                    catch(Exception ex) { }
                }
                myParfumes.Add(Parfume);
            }

            while (true)
            {
                Console.WriteLine("Write an Containing Word or Pharase to Show");
                id =Console.ReadLine();
                resultParfume = myParfumes.Where(x => x.Name.ToLower().Contains(id.ToLower())).ToList();
                
                foreach(var items in resultParfume)
                {
                    Console.WriteLine("-------------------------------------------");
                    Console.WriteLine(items.Name);
                    Console.WriteLine(items.Id);
                    foreach (var item in items.Properties)
                    {
                        Console.WriteLine(item.Key + ": " + item.Value);
                    }
                }
                Console.WriteLine("Found " + resultParfume.Count + " parfumes in "+myParfumes.Count+" parfumes for "+ id);

            }

            Console.ReadKey();
        }
    }
}