using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication1
{
    class Parfumes
    {
        public int Id;
        public string Name;
        public Dictionary<string, int> Properties = new Dictionary<string, int>();

        public Parfumes(int id,string name)
        {
            Id = id;
            Name = name;
        }
        public void addProp(string property, int value)
        {
            Properties.Add(property, value);
        }

    }
}