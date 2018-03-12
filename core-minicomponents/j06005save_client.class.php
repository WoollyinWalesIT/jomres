
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
0
6
0
0
5
s
a
v
e
_
c
l
i
e
n
t

	
{

	
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
c
o
m
p
o
n
e
n
t
A
r
g
s
 
)

	
	
{

	
	
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

	
	
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
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
m
c
H
a
n
d
l
e
r
'
 
)
;

	
	
i
f
 
(
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
 
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
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;
 
r
e
t
u
r
n
;
 
}


	
	
$
e
P
o
i
n
t
F
i
l
e
p
a
t
h
=
g
e
t
_
s
h
o
w
t
i
m
e
(
'
e
P
o
i
n
t
F
i
l
e
p
a
t
h
'
)
;

	
	
$
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
'
 
)
;


	
	
i
f
 
(
!
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)

	
	
	
{

	
	
	
$
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
s
 
=
 
a
r
r
a
y
 
(
 
"
u
s
e
r
"
)
;

	
	
	
}

	
	
e
l
s
e
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
 
&
&
 
!
$
t
h
i
s
J
R
U
s
e
r
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
)

	
	
	
{

	
	
	
$
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
s
 
=
 
a
r
r
a
y
 
(
 
"
u
s
e
r
"
 
,
 
"
m
a
n
a
g
e
r
"
 
)
;

	
	
	
}

	
	
	
e
l
s
e
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
 
&
&
 
$
t
h
i
s
J
R
U
s
e
r
-
>
s
u
p
e
r
P
r
o
p
e
r
t
y
M
a
n
a
g
e
r
)

	
	
	
{

	
	
	
$
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
s
 
=
 
a
r
r
a
y
 
(
 
"
u
s
e
r
"
 
,
 
"
m
a
n
a
g
e
r
"
 
,
 
"
s
u
p
e
r
"
 
)
;

	
	
	
}

	
	

	
	
j
r
_
i
m
p
o
r
t
(
"
j
o
m
r
e
s
_
o
a
u
t
h
_
s
c
o
p
e
s
"
)
;

	
	
$
s
c
o
p
e
s
_
c
l
a
s
s
 
=
 
n
e
w
 
j
o
m
r
e
s
_
o
a
u
t
h
_
s
c
o
p
e
s
(
$
e
P
o
i
n
t
F
i
l
e
p
a
t
h
)
;

	
	

 
 
 
 
 
 
 
 
$
i
d
e
n
t
i
f
i
e
r
	
	
	
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
 
$
_
P
O
S
T
,
 
'
i
d
e
n
t
i
f
i
e
r
'
,
 
"
"
 
)
;

	
	
$
c
l
i
e
n
t
_
i
d
	
	
	
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
 
$
_
P
O
S
T
,
 
'
c
l
i
e
n
t
_
i
d
'
,
 
"
"
 
)
;

	
	
$
c
l
i
e
n
t
_
s
e
c
r
e
t
	
	
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
 
$
_
P
O
S
T
,
 
'
c
l
i
e
n
t
_
s
e
c
r
e
t
'
,
 
"
"
 
)
;

	
	
$
r
e
d
i
r
e
c
t
_
u
r
i
	
	
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
 
$
_
P
O
S
T
,
 
'
r
e
d
i
r
e
c
t
_
u
r
i
'
,
 
"
"
 
)
;

	
	
$
p
o
s
t
e
d
_
s
c
o
p
e
s
	
	
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
 
$
_
P
O
S
T
,
 
'
s
c
o
p
e
s
'
,
 
a
r
r
a
y
(
)
 
)
;

	
	

	
	
$
r
e
q
u
e
s
t
e
d
_
s
c
o
p
e
s
 
=
 
'
'
;


	
	
$
g
r
a
n
t
_
t
y
p
e
s
 
=
 
n
u
l
l
;

	
	

 
 
 
 
 
 
 
 
i
f
 
(
 
$
c
l
i
e
n
t
_
i
d
 
!
=
 
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
n
a
m
e
 
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
s
c
o
p
e
s
_
c
l
a
s
s
-
>
d
e
f
a
u
l
t
_
s
c
o
p
e
s
 
a
s
 
$
c
a
t
e
g
o
r
y
 
=
>
 
$
c
a
t
e
g
o
r
y
_
s
c
o
p
e
s
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
c
a
t
e
g
o
r
y
_
s
c
o
p
e
s
 
a
s
 
$
s
c
o
p
e
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
 
i
n
_
a
r
r
a
y
 
(
 
$
s
c
o
p
e
-
>
u
s
e
r
_
t
y
p
e
 
,
 
 
$
a
v
a
i
l
a
b
l
e
_
s
c
o
p
e
s
 
)
 
&
&
 
i
n
_
a
r
r
a
y
(
 
$
s
c
o
p
e
-
>
s
c
o
p
e
 
,
 
$
p
o
s
t
e
d
_
s
c
o
p
e
s
 
)
 
 
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
e
d
_
s
c
o
p
e
s
 
.
=
 
$
s
c
o
p
e
-
>
s
c
o
p
e
.
"
,
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
q
u
e
s
t
e
d
_
s
c
o
p
e
s
 
=
 
r
t
r
i
m
(
$
r
e
q
u
e
s
t
e
d
_
s
c
o
p
e
s
,
 
"
,
"
)
;



 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
l
i
e
n
t
_
i
d
 
=
=
 
"
"
 
|
|
 
$
c
l
i
e
n
t
_
s
e
c
r
e
t
 
=
=
 
"
"
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
 
j
o
m
r
e
s
U
R
L
(
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
 
.
 
"
&
t
a
s
k
=
o
a
u
t
h
_
e
d
i
t
_
c
l
i
e
n
t
&
c
l
i
e
n
t
_
i
d
=
"
.
$
c
l
i
e
n
t
_
i
d
 
)
,
 
"
"
 
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
'
 
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
 
c
l
i
e
n
t
_
i
d
 
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
o
a
u
t
h
_
c
l
i
e
n
t
s
 
W
H
E
R
E
 
c
l
i
e
n
t
_
i
d
 
=
 
'
"
.
$
c
l
i
e
n
t
_
i
d
.
"
'
 
A
N
D
 
u
s
e
r
_
i
d
 
=
 
"
.
(
i
n
t
)
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
i
d
 
.
 
'
 
L
I
M
I
T
 
1
 
'
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
c
o
u
n
t
(
$
r
e
s
u
l
t
)
=
=
0
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
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
o
a
u
t
h
_
c
l
i
e
n
t
s
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
(
`
c
l
i
e
n
t
_
i
d
`
,
`
c
l
i
e
n
t
_
s
e
c
r
e
t
`
,
`
r
e
d
i
r
e
c
t
_
u
r
i
`
,
`
g
r
a
n
t
_
t
y
p
e
s
`
,
`
s
c
o
p
e
`
,
`
u
s
e
r
_
i
d
`
 
,
 
`
i
d
e
n
t
i
f
i
e
r
`
 
)
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
V
A
L
U
E
S
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
(
'
"
.
$
c
l
i
e
n
t
_
i
d
.
"
'
,
'
"
.
$
c
l
i
e
n
t
_
s
e
c
r
e
t
.
"
'
,
'
"
.
$
r
e
d
i
r
e
c
t
_
u
r
i
.
"
'
,
n
u
l
l
,
'
"
.
$
r
e
q
u
e
s
t
e
d
_
s
c
o
p
e
s
.
"
'
,
"
.
(
i
n
t
)
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
i
d
.
"
 
,
 
'
"
.
$
i
d
e
n
t
i
f
i
e
r
.
"
'
 
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
e
l
s
e

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
U
P
D
A
T
E
 
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
o
a
u
t
h
_
c
l
i
e
n
t
s
 
S
E
T
 
`
c
l
i
e
n
t
_
s
e
c
r
e
t
`
=
'
"
.
$
c
l
i
e
n
t
_
s
e
c
r
e
t
.
"
'
,
`
r
e
d
i
r
e
c
t
_
u
r
i
`
=
'
"
.
$
r
e
d
i
r
e
c
t
_
u
r
i
.
"
'
,
`
g
r
a
n
t
_
t
y
p
e
s
`
=
n
u
l
l
,
`
s
c
o
p
e
`
=
'
"
.
$
r
e
q
u
e
s
t
e
d
_
s
c
o
p
e
s
.
"
'
,
`
i
d
e
n
t
i
f
i
e
r
`
=
'
"
.
$
i
d
e
n
t
i
f
i
e
r
.
"
'
 
W
H
E
R
E
 
u
s
e
r
_
i
d
 
=
"
.
(
i
n
t
)
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
i
d
.
"
 
A
N
D
 
c
l
i
e
n
t
_
i
d
 
=
'
"
.
$
c
l
i
e
n
t
_
i
d
.
"
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
 
!
d
o
I
n
s
e
r
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
,
 
j
r
_
g
e
t
t
e
x
t
(
 
'
_
O
A
U
T
H
_
C
R
E
A
T
E
D
'
,
 
'
_
O
A
U
T
H
_
C
R
E
A
T
E
D
'
,
 
f
a
l
s
e
 
)
 
)
 
)
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
 
"
U
n
a
b
l
e
 
t
o
 
u
p
d
a
t
e
 
o
a
u
t
h
 
c
l
i
e
n
t
 
d
e
t
a
i
l
s
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
"
,
 
E
_
U
S
E
R
_
E
R
R
O
R
 
)
;

	
	
}

 
 
 
 
 
 
 
 

	
	
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
 
j
o
m
r
e
s
U
R
L
(
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
 
.
 
"
&
t
a
s
k
=
o
a
u
t
h
"
 
)
,
 
"
"
 
)
;
 

	
	
}


	
/
*
*

	
#

	
 
*
 
M
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
m
i
n
i
-
c
o
m
p
o
n
e
n
t

	
#

	
 
*
 
R
e
t
u
r
n
s
 
a
n
y
 
s
e
t
t
i
n
g
s
 
t
h
e
 
t
h
e
 
m
i
n
i
-
c
o
m
p
o
n
e
n
t
 
w
a
n
t
s
 
t
o
 
s
e
n
d
 
b
a
c
k
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
.
 
I
n
 
a
d
d
i
t
i
o
n
 
t
o
 
b
e
i
n
g
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
 
t
h
e
y
 
a
r
e
 
p
u
t
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
i
n
 
t
h
e
 
m
c
H
a
n
d
l
e
r
 
o
b
j
e
c
t
 
a
s
 
e
g
.
 
$
m
c
H
a
n
d
l
e
r
-
>
m
i
n
i
C
o
m
p
o
n
e
n
t
D
a
t
a
[
$
e
P
o
i
n
t
]
[
$
e
N
a
m
e
]

	
#

	
 
*
/

	
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

	
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
R
e
t
V
a
l
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
 
n
u
l
l
;

	
	
}

	
}

