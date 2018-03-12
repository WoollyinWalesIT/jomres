
<
?
p
h
p

/
*
*

 
*
 
F
i
n
d
s
 
a
l
l
 
A
P
I
 
f
e
a
t
u
r
e
 
s
c
r
i
p
t
s
.
 

 
*

 
*
 
A
d
d
i
t
i
o
n
a
l
l
y
 
f
i
n
d
s
 
a
u
t
h
-
f
r
e
e
 
A
P
I
 
f
e
a
t
u
r
e
s
,
 
w
h
i
c
h
 
a
r
e
 
s
c
r
i
p
t
s
 
t
h
a
t
 
c
a
n
 
b
e
 
c
a
l
l
e
d
 
b
y
 
a
n
y
 
s
i
t
e
 
v
i
s
i
t
o
r
,
 
t
h
e
y
 
d
o
 
n
o
t
 
n
e
e
d
 
t
o
 
b
e
 
a
u
t
h
e
n
t
i
c
a
t
e
d
.
 
F
o
r
 
e
x
a
m
p
l
e
,
 
a
 
b
a
s
i
c
 
s
e
a
r
c
h
 
a
n
d
 
r
e
s
p
o
n
s
e
 
w
o
u
l
d
n
'
t
 
n
o
r
m
a
l
l
y
 
n
e
e
d
 
t
o
 
b
e
 
a
u
t
h
e
n
t
i
c
a
t
e
d
,
 
s
o
 
t
h
e
r
e
'
s
 
n
o
 
O
A
u
t
h
2
 
k
e
y
 
p
a
i
r
 
r
e
q
u
i
r
e
d
 
t
o
 
c
a
l
l
 
t
h
a
t
 
R
E
S
T
 
A
P
I
 
p
a
t
h
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
*
*

*

*
 
R
e
m
o
t
e
 
f
i
l
e
 
i
n
c
l
u
s
i
o
n
 
d
e
f
e
n
c
e
.
 
W
e
'
l
l
 
c
o
l
l
e
c
t
 
a
l
l
 
p
o
s
s
i
b
l
e
 
A
P
I
 
f
e
a
t
u
r
e
 
f
i
l
e
 
n
a
m
e
s
 
t
h
e
r
e
.
 
L
a
t
e
r
,
 
w
h
e
n
 
r
o
u
t
i
n
g
,
 
i
f
 
t
h
e
 
f
i
l
e
 
d
o
e
s
n
'
t
 
e
x
i
s
t
 
t
h
e
n
 
b
o
o
m
,
 
w
e
 
d
o
n
'
t
 
i
n
c
l
u
d
e
 
i
t
.

*

*
/


c
l
a
s
s
 
a
l
l
_
a
p
i
_
f
e
a
t
u
r
e
s

{

	
/
*
*

	
*

	
*
 
C
o
n
s
t
r
u
c
t
o
r
.
 
S
e
t
s
 
u
p
 
a
r
r
a
y
s
 
a
n
d
 
f
i
n
d
s
 
A
P
I
 
f
e
a
t
u
r
e
s

	
*

	
*
/

 
 
 
 
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

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
p
i
_
f
e
a
t
u
r
e
_
f
i
l
e
s
 
=
 
a
r
r
a
y
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
a
u
t
h
e
n
t
i
c
a
t
i
o
n
_
f
r
e
e
_
r
o
u
t
e
s
 
=
 
a
r
r
a
y
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
g
e
t
_
a
l
l
_
a
p
i
_
f
e
a
t
u
r
e
s
(
J
O
M
R
E
S
_
A
P
I
_
J
O
M
R
E
S
_
R
O
O
T
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
.
'
c
o
r
e
-
p
l
u
g
i
n
s
'
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
g
e
t
_
a
l
l
_
a
p
i
_
f
e
a
t
u
r
e
s
(
J
O
M
R
E
S
_
A
P
I
_
J
O
M
R
E
S
_
R
O
O
T
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
.
'
r
e
m
o
t
e
_
p
l
u
g
i
n
s
'
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
)
;

 
 
 
 
}


	
/
*
*

	
*

	
*
 
R
e
t
u
r
n
s
 
t
h
e
 
A
P
I
 
f
e
a
t
u
r
e
s
 
f
o
u
n
d

	
*

	
*
/

 
 
 
 
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
(
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
a
p
i
_
f
e
a
t
u
r
e
_
f
i
l
e
s
;

 
 
 
 
}


	
/
*
*

	
*

	
*
 
R
e
t
u
r
n
s
 
t
h
e
 
a
u
t
h
-
f
r
e
e
 
A
P
I
 
f
e
a
t
u
r
e
s

	
*

	
*
/

	
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
a
u
t
h
f
r
e
e
_
r
o
u
t
e
s
(
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
a
u
t
h
e
n
t
i
c
a
t
i
o
n
_
f
r
e
e
_
r
o
u
t
e
s
;

	
}

	

	
/
*
*

	
*

	
*
 
S
c
a
n
s
 
d
i
r
e
c
t
o
r
i
e
s
 
f
o
r
 
A
P
I
 
f
e
a
t
u
r
e
s
 
i
n
 
l
o
o
k
i
n
g
 
f
o
r
 
p
l
u
g
i
n
s
 
t
h
a
t
 
a
r
e
 
p
r
e
f
i
x
e
d
 
"
a
p
i
_
f
e
a
t
u
r
e
_
"
.
 

	
*

	
*
/

 
 
 
 
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
 
g
e
t
_
a
l
l
_
a
p
i
_
f
e
a
t
u
r
e
s
(
$
p
a
t
h
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
c
o
r
e
_
p
l
u
g
i
n
s
_
d
i
r
_
c
o
n
t
e
n
t
s
 
=
 
s
c
a
n
d
i
r
(
$
p
a
t
h
)
;

 
 
 
 
 
 
 
 
$
a
p
i
_
f
e
a
t
u
r
e
_
d
i
r
e
c
t
o
r
i
e
s
 
=
 
a
r
r
a
y
(
)
;


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
c
o
r
e
_
p
l
u
g
i
n
s
_
d
i
r
_
c
o
n
t
e
n
t
s
 
a
s
 
$
d
i
r
e
c
t
o
r
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
u
b
s
t
r
(
$
d
i
r
e
c
t
o
r
y
,
 
0
,
 
1
2
)
 
=
=
 
'
a
p
i
_
f
e
a
t
u
r
e
_
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
p
i
_
f
e
a
t
u
r
e
_
d
i
r
e
c
t
o
r
i
e
s
[
]
 
=
 
$
d
i
r
e
c
t
o
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
a
p
i
_
f
e
a
t
u
r
e
_
d
i
r
e
c
t
o
r
i
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
a
p
i
_
f
e
a
t
u
r
e
_
d
i
r
e
c
t
o
r
i
e
s
 
a
s
 
$
p
l
u
g
i
n
)
 
{

	
	
	
	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
p
a
t
h
.
$
p
l
u
g
i
n
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
.
'
a
u
t
h
_
f
r
e
e
.
j
s
o
n
'
)
 
)
 
{

	
	
	
	
	
$
j
s
o
n
 
=
 
j
s
o
n
_
d
e
c
o
d
e
(
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
t
s
(
$
p
a
t
h
.
$
p
l
u
g
i
n
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
.
'
a
u
t
h
_
f
r
e
e
.
j
s
o
n
'
)
)
;

	
	
	
	
	
i
f
(
$
j
s
o
n
-
>
a
u
t
h
_
f
r
e
e
 
=
=
=
 
t
r
u
e
 
)
 
{

	
	
	
	
	
	
$
t
h
i
s
-
>
a
u
t
h
e
n
t
i
c
a
t
i
o
n
_
f
r
e
e
_
r
o
u
t
e
s
[
]
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
a
p
i
_
f
e
a
t
u
r
e
_
"
 
,
 
"
"
 
,
 
$
p
l
u
g
i
n
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
d
i
r
_
c
o
n
t
e
n
t
s
 
=
 
s
c
a
n
d
i
r
(
$
p
a
t
h
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
.
$
p
l
u
g
i
n
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
p
l
u
g
i
n
_
d
i
r
_
c
o
n
t
e
n
t
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
p
l
u
g
i
n
_
d
i
r
_
c
o
n
t
e
n
t
s
 
a
s
 
$
m
e
t
h
o
d
_
d
i
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
e
t
h
o
d
_
d
i
r
 
=
=
=
 
'
.
'
 
o
r
 
$
m
e
t
h
o
d
_
d
i
r
 
=
=
=
 
'
.
.
'
 
o
r
 
$
m
e
t
h
o
d
_
d
i
r
 
=
=
=
 
'
l
a
n
g
u
a
g
e
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
o
n
t
i
n
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
d
i
r
(
$
p
a
t
h
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
.
$
p
l
u
g
i
n
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
.
$
m
e
t
h
o
d
_
d
i
r
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
s
 
=
 
s
c
a
n
d
i
r
(
$
p
a
t
h
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
.
$
p
l
u
g
i
n
.
D
I
R
E
C
T
O
R
Y
_
S
E
P
A
R
A
T
O
R
.
$
m
e
t
h
o
d
_
d
i
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
f
i
l
e
s
 
a
s
 
$
f
i
l
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
e
 
!
=
 
'
.
'
 
&
&
 
$
f
i
l
e
 
!
=
 
'
.
.
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
p
i
_
f
e
a
t
u
r
e
_
f
i
l
e
s
[
]
 
=
 
$
f
i
l
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

