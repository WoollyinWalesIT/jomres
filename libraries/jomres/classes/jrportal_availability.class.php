
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


c
l
a
s
s
 
j
r
p
o
r
t
a
l
_
a
v
a
i
l
a
b
i
l
i
t
y

{

	
p
r
o
t
e
c
t
e
d
 
$
p
r
o
p
e
r
t
y
_
u
i
d
;

	

	
p
r
o
t
e
c
t
e
d
 
$
a
r
r
i
v
a
l
;

	

	
p
r
o
t
e
c
t
e
d
 
$
d
e
p
a
r
t
u
r
e
;

	

	
p
r
o
t
e
c
t
e
d
 
$
r
o
o
m
_
u
i
d
s
;

	

 
 
 
 
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
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
0
,
 
$
a
r
r
i
v
a
l
 
=
 
'
'
,
 
$
d
e
p
a
r
t
u
r
e
 
=
 
'
'
,
 
$
r
o
o
m
_
u
i
d
s
 
=
 
a
r
r
a
y
(
)
)

 
 
 
 
{

	
	
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
$
p
r
o
p
e
r
t
y
_
u
i
d
;
	
/
/
r
e
q
u
i
r
e
d


	
	
$
t
h
i
s
-
>
a
r
r
i
v
a
l
 
=
 
$
a
r
r
i
v
a
l
;
	
	
	
	
/
/
d
a
t
e
 
r
e
q
u
i
r
e
d

	
	
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
 
=
 
$
d
e
p
a
r
t
u
r
e
;
	
	
	
/
/
d
a
t
e
 
r
e
q
u
i
r
e
d

	
	
$
t
h
i
s
-
>
r
o
o
m
_
u
i
d
s
 
=
 
$
r
o
o
m
_
u
i
d
s
;
	
	
	
/
/
a
r
r
a
y
 
o
f
 
r
o
o
m
 
u
i
d
s
,
 
r
e
q
u
i
r
e
d

	
	

	
	
$
t
h
i
s
-
>
v
a
l
i
d
a
t
e
(
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
 
c
h
e
c
k
_
a
v
a
i
l
a
b
i
l
i
t
y
(
)

	
{

	
	
$
d
a
t
e
_
r
a
n
g
e
 
=
 
f
i
n
d
D
a
t
e
R
a
n
g
e
F
o
r
D
a
t
e
s
(
$
t
h
i
s
-
>
a
r
r
i
v
a
l
,
 
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
)
;

	
	
a
r
r
a
y
_
p
o
p
(
$
d
a
t
e
_
r
a
n
g
e
)
;

	
	

	
	
$
q
u
e
r
y
=
"
S
E
L
E
C
T
 
`
r
o
o
m
_
b
o
o
k
i
n
g
s
_
u
i
d
`
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
_
b
o
o
k
i
n
g
s
 
W
H
E
R
E
 
`
r
o
o
m
_
u
i
d
`
 
I
N
 
(
"
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
t
h
i
s
-
>
r
o
o
m
_
u
i
d
s
)
.
"
)
 
A
N
D
 
`
d
a
t
e
`
 
I
N
 
(
"
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
d
a
t
e
_
r
a
n
g
e
,
 
f
a
l
s
e
)
.
"
)
 
"
;

	
	
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

	
	

	
	
i
f
 
(
!
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

	
	
	
r
e
t
u
r
n
 
f
a
l
s
e
;

	
	
}

	
	

	
	
r
e
t
u
r
n
 
t
r
u
e
;

	
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
v
a
l
i
d
a
t
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
-
>
a
r
r
i
v
a
l
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
 
A
r
r
i
v
a
l
 
d
a
t
e
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

	
	
i
f
 
(
$
t
h
i
s
-
>
d
e
p
a
r
t
u
r
e
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
 
D
e
p
a
r
t
u
r
e
 
d
a
t
e
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

	
	
i
f
 
(
!
i
s
_
a
r
r
a
y
(
$
t
h
i
s
-
>
r
o
o
m
_
u
i
d
s
)
 
|
|
 
e
m
p
t
y
(
$
t
h
i
s
-
>
r
o
o
m
_
u
i
d
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
 
R
o
o
m
 
u
i
d
s
 
a
r
r
a
y
 
n
o
t
 
s
e
t
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

	
	
i
f
 
(
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
 
E
r
r
o
r
 
p
r
o
p
e
r
t
y
_
u
i
d
 
i
s
 
n
o
t
 
v
a
l
i
d
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
}

}

