
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
o
m
r
e
s
_
c
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y

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
$
t
a
s
k
 
=
 
'
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
t
a
s
k
 
=
 
$
t
a
s
k
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
k
e
y
_
v
a
l
i
d
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
p
_
s
t
a
t
u
s
 
=
 
'
C
L
O
S
E
D
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
h
e
c
k
_
l
i
c
e
n
s
e
_
k
e
y
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
 
g
e
t
_
s
h
o
p
_
s
t
a
t
u
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
r
e
q
u
e
s
t
 
=
 
'
r
e
q
u
e
s
t
=
s
h
o
p
_
s
t
a
t
u
s
'
;

 
 
 
 
 
 
 
 
$
r
e
s
p
o
n
s
e
 
=
 
q
u
e
r
y
_
s
h
o
p
(
$
r
e
q
u
e
s
t
)
;

 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
o
b
j
e
c
t
(
$
r
e
s
p
o
n
s
e
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
s
h
o
p
_
s
t
a
t
u
s
 
=
 
$
r
e
s
p
o
n
s
e
-
>
s
t
a
t
u
s
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
p
_
s
t
a
t
u
s
 
=
 
'
C
L
O
S
E
D
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
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
 
r
e
m
o
v
e
_
p
l
u
g
i
n
_
l
i
c
e
n
s
e
s
_
f
i
l
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
u
n
l
i
n
k
(
J
O
M
R
E
S
_
T
E
M
P
_
A
B
S
P
A
T
H
.
$
t
h
i
s
-
>
u
s
e
r
_
p
l
u
g
i
n
_
l
i
c
e
n
s
e
_
t
e
m
p
_
f
i
l
e
_
n
a
m
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
u
s
e
r
_
p
l
u
g
i
n
_
l
i
c
e
n
s
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
_
o
n
c
e
 
J
O
M
R
E
S
_
T
E
M
P
_
A
B
S
P
A
T
H
.
$
t
h
i
s
-
>
u
s
e
r
_
p
l
u
g
i
n
_
l
i
c
e
n
s
e
_
t
e
m
p
_
f
i
l
e
_
n
a
m
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
l
u
g
i
n
_
l
i
c
e
n
s
e
s
 
=
 
p
l
u
g
i
n
_
l
i
c
e
n
s
e
s
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
l
i
c
e
n
s
e
_
k
e
y
(
$
f
o
r
c
e
 
=
 
f
a
l
s
e
 
,
 
$
k
e
y
 
=
 
'
'
 
)

 
 
 
 
{


	
	

	
	

 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;


	
	
i
f
 
(
 
$
k
e
y
 
=
=
 
'
'
 
)

	
	
	
$
s
t
r
 
=
 
'
k
e
y
=
'
.
$
j
r
C
o
n
f
i
g
[
'
l
i
c
e
n
s
e
k
e
y
'
]
;

	
	
e
l
s
e

	
	
	
$
s
t
r
 
=
 
'
k
e
y
=
'
.
$
k
e
y
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
k
e
y
_
h
a
s
h
 
=
 
$
j
r
C
o
n
f
i
g
[
'
l
i
c
e
n
s
e
k
e
y
'
]
;


 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

	
	

	
	
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
l
i
c
e
n
s
e
_
n
a
m
e
 
=
 
'
U
n
k
n
o
w
n
'
;

 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
e
x
p
i
r
e
s
 
=
 
'
U
n
k
n
o
w
n
'
;

 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
k
e
y
_
s
t
a
t
u
s
 
=
 
'
U
n
k
n
o
w
n
'
;

 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
o
w
n
e
r
 
=
 
'
U
n
k
n
o
w
n
'
;

 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
l
i
c
e
n
s
e
_
v
a
l
i
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
a
l
l
o
w
s
_
p
l
u
g
i
n
s
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
i
s
_
t
r
i
a
l
_
l
i
c
e
n
s
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
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
J
O
M
R
E
S
_
T
E
M
P
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
l
i
c
e
n
s
e
_
k
e
y
_
c
h
e
c
k
_
c
a
c
h
e
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
s
t
_
m
o
d
i
f
i
e
d
 
=
 
f
i
l
e
m
t
i
m
e
(
J
O
M
R
E
S
_
T
E
M
P
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
l
i
c
e
n
s
e
_
k
e
y
_
c
h
e
c
k
_
c
a
c
h
e
.
p
h
p
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
c
o
n
d
s
_
t
i
m
e
d
i
f
f
 
=
 
t
i
m
e
(
)
 
-
 
$
l
a
s
t
_
m
o
d
i
f
i
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
c
o
n
d
s
_
t
i
m
e
d
i
f
f
 
>
 
8
6
4
0
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
u
n
l
i
n
k
(
J
O
M
R
E
S
_
T
E
M
P
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
l
i
c
e
n
s
e
_
k
e
y
_
c
h
e
c
k
_
c
a
c
h
e
.
p
h
p
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
 
J
O
M
R
E
S
_
T
E
M
P
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
l
i
c
e
n
s
e
_
k
e
y
_
c
h
e
c
k
_
c
a
c
h
e
.
p
h
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}




 
 
 
 
 
 
 
 
i
f
 
(
!
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
J
O
M
R
E
S
_
T
E
M
P
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
l
i
c
e
n
s
e
_
k
e
y
_
c
h
e
c
k
_
c
a
c
h
e
.
p
h
p
'
)
 
|
|
 
$
f
o
r
c
e
)
 
{

	
	
	

	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
$
b
u
f
f
e
r
 
=
 
q
u
e
r
y
U
p
d
a
t
e
S
e
r
v
e
r
(
'
c
h
e
c
k
_
k
e
y
.
p
h
p
'
,
 
$
s
t
r
,
 
'
u
p
d
a
t
e
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
b
u
f
f
e
r
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
 
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
$
b
u
f
f
e
r
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
l
i
c
e
n
s
e
_
v
a
l
i
d
 
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
l
i
c
e
n
s
e
_
d
a
t
a
-
>
l
i
c
e
n
s
e
_
v
a
l
i
d
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
l
i
c
e
n
s
e
_
v
a
l
i
d
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
n
u
l
l
(
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
e
x
p
i
r
e
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
e
x
p
i
r
e
s
 
=
 
'
U
n
k
n
o
w
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
n
u
l
l
(
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
a
l
l
o
w
s
_
p
l
u
g
i
n
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
a
l
l
o
w
s
_
p
l
u
g
i
n
s
 
=
 
'
U
n
k
n
o
w
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
_
n
u
l
l
(
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
i
s
_
t
r
i
a
l
_
l
i
c
e
n
s
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
i
s
_
t
r
i
a
l
_
l
i
c
e
n
s
e
 
=
 
'
U
n
k
n
o
w
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
s
t
a
t
u
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
k
e
y
_
s
t
a
t
u
s
 
=
 
'
U
n
k
n
o
w
n
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
k
e
y
_
s
t
a
t
u
s
 
=
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
s
t
a
t
u
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
c
_
d
a
t
a
 
=
 
'
<
?
p
h
p

d
e
f
i
n
e
d
(
 
\
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
\
'
 
)
 
o
r
 
d
i
e
(
 
\
'
\
'
 
)
;

$
l
i
c
e
n
s
e
_
d
a
t
a
	
=
 
n
e
w
 
s
t
d
C
l
a
s
s
;

$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
l
i
c
e
n
s
e
_
n
a
m
e
 
=
 
"
'
.
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
l
i
c
e
n
s
e
_
n
a
m
e
.
'
"
;

$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
e
x
p
i
r
e
s
 
=
 
"
'
.
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
e
x
p
i
r
e
s
.
'
"
;

$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
k
e
y
_
s
t
a
t
u
s
 
=
 
"
'
.
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
k
e
y
_
s
t
a
t
u
s
.
'
"
;

$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
o
w
n
e
r
 
=
 
"
'
.
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
o
w
n
e
r
.
'
"
;

$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
l
i
c
e
n
s
e
_
v
a
l
i
d
 
=
 
"
'
.
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
l
i
c
e
n
s
e
_
v
a
l
i
d
.
'
"
;

$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
a
l
l
o
w
s
_
p
l
u
g
i
n
s
 
=
 
"
'
.
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
a
l
l
o
w
s
_
p
l
u
g
i
n
s
.
'
"
;

$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
i
s
_
t
r
i
a
l
_
l
i
c
e
n
s
e
 
=
 
"
'
.
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
i
s
_
t
r
i
a
l
_
l
i
c
e
n
s
e
.
'
"
;

$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
a
l
l
o
w
e
d
_
p
l
u
g
i
n
s
 
=
 
"
'
.
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
a
l
l
o
w
e
d
_
p
l
u
g
i
n
s
.
'
"
;

'
;

	
	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
i
l
e
_
p
u
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
J
O
M
R
E
S
_
T
E
M
P
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
l
i
c
e
n
s
e
_
k
e
y
_
c
h
e
c
k
_
c
a
c
h
e
.
p
h
p
'
,
 
$
l
i
c
_
d
a
t
a
)
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
l
i
c
e
n
s
e
_
d
a
t
a
)
)
 
{
 
/
/
 
Q
u
e
r
y
 
f
a
i
l
e
d
 
f
o
r
 
s
o
m
e
 
r
e
a
s
o
n
,
 
p
e
r
h
a
p
s
 
s
l
o
w
 
c
o
n
n
e
c
t
i
o
n

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
e
x
p
i
r
e
s
 
=
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
e
x
p
i
r
e
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
k
e
y
_
s
t
a
t
u
s
 
=
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
k
e
y
_
s
t
a
t
u
s
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
o
w
n
e
r
 
=
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
o
w
n
e
r
;

	
	
	
$
t
h
i
s
-
>
l
i
c
e
n
s
e
_
n
a
m
e
 
=
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
l
i
c
e
n
s
e
_
n
a
m
e
;

	
	
	
$
t
h
i
s
-
>
a
l
l
o
w
e
d
_
p
l
u
g
i
n
s
 
=
 
e
x
p
l
o
d
e
(
"
,
"
 
,
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
a
l
l
o
w
e
d
_
p
l
u
g
i
n
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
l
i
c
e
n
s
e
_
v
a
l
i
d
 
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
k
e
y
_
v
a
l
i
d
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
o
w
s
_
p
l
u
g
i
n
s
 
=
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
a
l
l
o
w
s
_
p
l
u
g
i
n
s
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
i
s
_
t
r
i
a
l
_
l
i
c
e
n
s
e
 
=
=
 
'
U
n
k
n
o
w
n
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
i
s
_
t
r
i
a
l
_
l
i
c
e
n
s
e
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
s
_
t
r
i
a
l
_
l
i
c
e
n
s
e
 
=
 
(
b
o
o
l
)
 
$
l
i
c
e
n
s
e
_
d
a
t
a
-
>
i
s
_
t
r
i
a
l
_
l
i
c
e
n
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

