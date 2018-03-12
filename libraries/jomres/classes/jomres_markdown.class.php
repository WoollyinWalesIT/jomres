
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


/
/
 
A
 
w
r
a
p
p
e
r
 
c
l
a
s
s
 
f
o
r
 
p
a
r
s
i
n
g
 
d
a
t
a
 
t
h
r
o
u
g
h
 
a
 
m
a
r
k
d
o
w
n
 
c
l
a
s
s


c
l
a
s
s
 
j
o
m
r
e
s
_
m
a
r
k
d
o
w
n
 
{


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)
 
{

 
 
 
 
 
 
 
 
/
/
r
e
q
u
i
r
e
_
o
n
c
e
 
(
J
O
M
R
E
S
_
L
I
B
R
A
R
I
E
S
_
A
B
S
P
A
T
H
.
'
P
a
r
s
e
d
o
w
n
'
.
J
R
D
S
.
'
P
a
r
s
e
d
o
w
n
.
p
h
p
'
)
;

	
	
$
t
h
i
s
-
>
P
a
r
s
e
d
o
w
n
 
=
 
n
e
w
 
P
a
r
s
e
d
o
w
n
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
P
a
r
s
e
d
o
w
n
-
>
s
e
t
B
r
e
a
k
s
E
n
a
b
l
e
d
(
t
r
u
e
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
m
a
r
k
d
o
w
n
(
$
s
t
r
i
n
g
)
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
P
a
r
s
e
d
o
w
n
-
>
t
e
x
t
(
$
s
t
r
i
n
g
)
;

 
 
 
 
}


}

