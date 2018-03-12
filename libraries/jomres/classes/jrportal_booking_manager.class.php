
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
b
o
o
k
i
n
g
_
m
a
n
a
g
e
r

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

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
n
i
t
(
)
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
 
i
n
i
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
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
0
;
 
/
/
 
c
o
n
t
r
a
c
t
_
u
i
d

	
	
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
 
0
;
 
/
/
 
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

 
 
 
 
}

	

	
/
/
G
u
e
s
t
 
c
h
e
c
k
i
n

 
 
 
 
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
u
e
s
t
_
c
h
e
c
k
i
n
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
c
o
n
t
r
a
c
t
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
:
 
C
o
n
t
r
a
c
t
 
u
i
d
 
n
o
t
 
s
e
t
.
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
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
c
o
n
t
r
a
c
t
s
 
S
E
T
 

	
	
	
	
	
	
`
b
o
o
k
e
d
_
i
n
`
=
 
1
,
 

	
	
	
	
	
	
`
t
r
u
e
_
a
r
r
i
v
a
l
`
 
=
 
'
"
.
d
a
t
e
(
"
Y
/
m
/
d
"
)
.
"
'
 

	
	
	
	
	
W
H
E
R
E
 

	
	
	
	
	
	
`
c
o
n
t
r
a
c
t
_
u
i
d
`
 
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
-
>
c
o
n
t
r
a
c
t
_
u
i
d
.
"
 

	
	
	
	
	
A
N
D
 

	
	
	
	
	
	
`
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
`
 
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
;

	
	

	
	
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
 
'
'
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
E
r
r
o
r
:
 
G
u
e
s
t
 
c
h
e
c
k
i
n
 
i
n
s
e
r
t
 
f
a
i
l
e
d
.
'
)
;

	
	
}

	
	

	
	
a
d
d
B
o
o
k
i
n
g
N
o
t
e
(
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
u
i
d
,
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
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
B
O
O
K
E
D
G
U
E
S
T
I
N
'
,
'
_
J
O
M
R
E
S
_
M
R
_
A
U
D
I
T
_
B
O
O
K
E
D
G
U
E
S
T
I
N
'
,
F
A
L
S
E
)
)
;

	
	

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
g
u
e
s
t
_
c
h
e
c
k
e
d
i
n
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
g
u
e
s
t
s
 
a
r
e
 
c
h
e
c
k
e
d
 
i
n
.
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
b
o
o
k
_
g
u
e
s
t
_
i
n
_
o
u
t
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
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
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
c
o
n
t
r
a
c
t
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
u
i
d
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
;

	
	
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
;


 
 
 
 
 
 
 
 
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

	

	
/
/
U
n
d
o
 
g
u
e
s
t
 
c
h
e
c
k
i
n

 
 
 
 
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
 
u
n
d
o
_
g
u
e
s
t
_
c
h
e
c
k
i
n
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
c
o
n
t
r
a
c
t
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
:
 
C
o
n
t
r
a
c
t
 
u
i
d
 
n
o
t
 
s
e
t
.
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
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
c
o
n
t
r
a
c
t
s
 
S
E
T
 

	
	
	
	
	
	
`
b
o
o
k
e
d
_
i
n
`
=
 
0
,
 

	
	
	
	
	
	
`
t
r
u
e
_
a
r
r
i
v
a
l
`
 
=
 
'
'
 

	
	
	
	
	
W
H
E
R
E
 

	
	
	
	
	
	
`
c
o
n
t
r
a
c
t
_
u
i
d
`
 
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
-
>
c
o
n
t
r
a
c
t
_
u
i
d
.
"
 

	
	
	
	
	
A
N
D
 

	
	
	
	
	
	
`
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
`
 
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
;

	
	

	
	
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
 
'
'
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
E
r
r
o
r
:
 
U
n
d
o
 
g
u
e
s
t
 
c
h
e
c
k
i
n
 
i
n
s
e
r
t
 
f
a
i
l
e
d
.
'
)
;

	
	
}

	
	

	
	
a
d
d
B
o
o
k
i
n
g
N
o
t
e
(
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
u
i
d
,
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
,
"
U
n
d
o
n
e
 
g
u
e
s
t
 
c
h
e
c
k
i
n
"
)
;

	
	

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
g
u
e
s
t
_
c
h
e
c
k
e
d
i
n
_
u
n
d
o
n
e
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
g
u
e
s
t
s
 
c
h
e
c
k
e
d
 
i
n
 
i
s
 
u
n
d
o
n
e
.
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
b
o
o
k
_
g
u
e
s
t
_
i
n
_
o
u
t
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
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
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
c
o
n
t
r
a
c
t
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
u
i
d
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
;

	
	
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
;


 
 
 
 
 
 
 
 
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

	

	
/
/
G
u
e
s
t
 
c
h
e
c
k
o
u
t

 
 
 
 
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
u
e
s
t
_
c
h
e
c
k
o
u
t
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
c
o
n
t
r
a
c
t
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
:
 
C
o
n
t
r
a
c
t
 
u
i
d
 
n
o
t
 
s
e
t
.
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
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
c
o
n
t
r
a
c
t
s
 
S
E
T
 

	
	
	
	
	
	
`
b
o
o
k
e
d
o
u
t
`
=
 
1
,
 

	
	
	
	
	
	
`
b
o
o
k
e
d
o
u
t
_
t
i
m
e
s
t
a
m
p
`
 
=
 
'
"
.
d
a
t
e
(
"
Y
-
m
-
d
 
H
:
i
:
s
"
)
.
"
'
 

	
	
	
	
	
W
H
E
R
E
 

	
	
	
	
	
	
`
c
o
n
t
r
a
c
t
_
u
i
d
`
 
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
-
>
c
o
n
t
r
a
c
t
_
u
i
d
.
"
 

	
	
	
	
	
A
N
D
 

	
	
	
	
	
	
`
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
`
 
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
;

	
	

	
	
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
 
'
'
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
E
r
r
o
r
:
 
G
u
e
s
t
 
c
h
e
c
k
o
u
t
 
i
n
s
e
r
t
 
f
a
i
l
e
d
.
'
)
;

	
	
}

	
	

	
	
a
d
d
B
o
o
k
i
n
g
N
o
t
e
(
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
u
i
d
,
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
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
O
U
T
_
G
U
E
S
T
B
O
O
K
E
D
O
U
T
'
,
'
_
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
B
O
O
K
O
U
T
_
G
U
E
S
T
B
O
O
K
E
D
O
U
T
'
,
F
A
L
S
E
)
)
;

	
	

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
g
u
e
s
t
_
c
h
e
c
k
e
d
o
u
t
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
g
u
e
s
t
s
 
a
r
e
 
c
h
e
c
k
e
d
 
o
u
t
.
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
b
o
o
k
_
g
u
e
s
t
_
i
n
_
o
u
t
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
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
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
c
o
n
t
r
a
c
t
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
u
i
d
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
;

	
	
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
;


 
 
 
 
 
 
 
 
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

	

	
/
/
U
n
d
o
 
g
u
e
s
t
 
c
h
e
c
k
o
u
t

 
 
 
 
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
 
u
n
d
o
_
g
u
e
s
t
_
c
h
e
c
k
o
u
t
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
c
o
n
t
r
a
c
t
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
:
 
C
o
n
t
r
a
c
t
 
u
i
d
 
n
o
t
 
s
e
t
.
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
:
 
P
r
o
p
e
r
t
y
 
u
i
d
 
n
o
t
 
s
e
t
.
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
c
o
n
t
r
a
c
t
s
 
S
E
T
 

	
	
	
	
	
	
`
b
o
o
k
e
d
o
u
t
`
=
 
0
,
 

	
	
	
	
	
	
`
b
o
o
k
e
d
o
u
t
_
t
i
m
e
s
t
a
m
p
`
 
=
 
'
1
9
7
0
-
0
1
-
0
1
 
0
0
:
0
0
:
0
1
'
 

	
	
	
	
	
W
H
E
R
E
 

	
	
	
	
	
	
`
c
o
n
t
r
a
c
t
_
u
i
d
`
 
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
-
>
c
o
n
t
r
a
c
t
_
u
i
d
.
"
 

	
	
	
	
	
A
N
D
 

	
	
	
	
	
	
`
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
`
 
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
;

	
	

	
	
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
 
'
'
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
E
r
r
o
r
:
 
U
n
d
o
 
g
u
e
s
t
 
c
h
e
c
k
o
u
t
 
i
n
s
e
r
t
 
f
a
i
l
e
d
.
'
)
;

	
	
}

	
	

	
	
a
d
d
B
o
o
k
i
n
g
N
o
t
e
(
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
u
i
d
,
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
,
"
U
n
d
o
n
e
 
g
u
e
s
t
 
c
h
e
c
k
o
u
t
"
)
;

	
	

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
g
u
e
s
t
_
c
h
e
c
k
e
d
o
u
t
_
u
n
d
o
n
e
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
g
u
e
s
t
s
 
c
h
e
c
k
e
d
 
o
u
t
 
i
s
 
u
n
d
o
n
e
.
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
b
o
o
k
_
g
u
e
s
t
_
i
n
_
o
u
t
'
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
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
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
c
o
n
t
r
a
c
t
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
$
t
h
i
s
-
>
c
o
n
t
r
a
c
t
_
u
i
d
;

	
	
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
;

	
	
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
;


 
 
 
 
 
 
 
 
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

