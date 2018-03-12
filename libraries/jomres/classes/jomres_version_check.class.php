
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
v
e
r
s
i
o
n
_
c
h
e
c
k

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
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
)

 
 
 
 
{

	
	
$
t
h
i
s
-
>
l
a
t
e
s
t
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
 
=
 
g
e
t
_
l
a
t
e
s
t
_
j
o
m
r
e
s
_
v
e
r
s
i
o
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
t
m
p
_
d
i
r
 
=
 
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
"
v
e
r
s
i
o
n
_
c
h
e
c
k
s
"
;

	
	
$
t
h
i
s
-
>
s
e
c
r
e
t
 
=
 
m
d
5
(
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
s
e
c
r
e
t
'
)
)
;
 
/
/
 
W
e
 
w
i
l
l
 
u
s
e
 
t
h
e
 
s
e
c
r
e
t
 
v
a
r
i
a
b
l
e
 
b
e
c
a
u
s
e
 
w
e
 
d
o
n
'
t
 
w
a
n
t
 
t
e
m
p
o
r
a
r
y
 
f
i
l
e
s
 
w
i
t
h
 
j
u
s
t
 
t
h
e
 
v
e
r
s
i
o
n
 
n
u
m
b
e
r
 
a
s
 
t
h
i
s
 
i
s
 
a
 
s
e
c
u
r
i
t
y
 
r
i
s
k
.
 
B
a
d
 
p
e
o
p
l
e
 
c
o
u
l
d
 
j
u
s
t
 
c
o
m
e
 
a
n
d
 
t
e
s
t
 
f
o
r
 
v
e
r
s
i
o
n
 
n
u
m
b
e
r
s
 
a
n
d
 
i
f
 
a
 
v
e
r
s
i
o
n
 
h
a
s
 
a
 
v
u
l
n
e
r
a
b
i
l
i
t
y
 
t
h
e
n
 
t
h
a
t
 
c
o
u
l
d
 
b
e
 
z
e
r
o
e
d
 
i
n
 
o
n
.
 
S
o
,
 
w
e
'
l
l
 
m
d
5
 
h
a
s
h
 
t
h
e
 
s
i
t
e
 
s
e
c
r
e
t
 
t
o
 
h
e
l
p
 
w
i
t
h
 
c
r
e
a
t
i
n
g
 
t
h
e
 
v
e
r
s
i
o
n
 
f
i
l
e
.

	
	

	
	
i
f
 
(
!
i
s
_
d
i
r
(
$
t
h
i
s
-
>
t
m
p
_
d
i
r
)
)
 
{

	
	
	
i
f
 
(
!
m
k
d
i
r
(
$
t
h
i
s
-
>
t
m
p
_
d
i
r
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
,
 
c
o
u
l
d
 
n
o
t
 
c
r
e
a
t
e
 
v
e
r
s
i
o
n
 
c
h
e
c
k
 
t
e
m
p
o
r
a
r
y
 
d
i
r
e
c
t
o
r
y
'
)
;

	
	
	
}

	
	
}

	
	

	
	
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
f
i
l
e
 
=
 
$
t
h
i
s
-
>
t
m
p
_
d
i
r
.
J
R
D
S
.
$
t
h
i
s
-
>
l
a
t
e
s
t
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
.
'
_
'
.
$
t
h
i
s
-
>
s
e
c
r
e
t
.
'
.
t
x
t
'
;

	
	
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
f
i
l
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
c
h
e
c
k
_
v
e
r
s
i
o
n
(
)
;

	
	
}

	
	

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
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
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
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
v
e
r
s
i
o
n
(
)
 
/
/
 
W
e
'
l
l
 
g
e
t
 
t
h
e
 
c
u
r
r
e
n
t
 
v
e
r
s
i
o
n
,
 

 
 
 
 
{

	
	
$
c
u
r
r
e
n
t
_
v
e
r
s
i
o
n
_
i
s
_
u
p
t
o
d
a
t
e
 
=
 
c
h
e
c
k
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
(
f
a
l
s
e
)
;

	
	
i
f
 
(
!
$
c
u
r
r
e
n
t
_
v
e
r
s
i
o
n
_
i
s
_
u
p
t
o
d
a
t
e
)
 
{

	
	
	
$
s
u
b
j
e
c
t
 
=
 
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
V
E
R
S
I
O
N
C
H
E
C
K
_
L
A
T
E
S
T
J
O
M
R
E
S
V
E
R
S
I
O
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
V
E
R
S
I
O
N
C
H
E
C
K
_
L
A
T
E
S
T
J
O
M
R
E
S
V
E
R
S
I
O
N
'
,
 
f
a
l
s
e
 
,
 
f
a
l
s
e
 
)
.
'
 
'
.
$
t
h
i
s
-
>
l
a
t
e
s
t
_
j
o
m
r
e
s
_
v
e
r
s
i
o
n
;

	
	
	
$
m
e
s
s
a
g
e
 
=
 
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
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
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
V
E
R
S
I
O
N
C
H
E
C
K
_
V
E
R
S
I
O
N
W
A
R
N
I
N
G
'
,
 
f
a
l
s
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
 
\
n
\
r
 
<
a
 
h
r
e
f
=
'
"
.
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
_
A
D
M
I
N
.
"
'
>
"
.
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
_
A
D
M
I
N
.
"
<
/
a
>
"
;

	
	
	
s
e
n
d
A
d
m
i
n
E
m
a
i
l
(
$
s
u
b
j
e
c
t
,
 
$
m
e
s
s
a
g
e
 
)
;

	
	
}

	
	
$
t
h
i
s
-
>
w
r
i
t
e
_
c
h
e
c
k
f
i
l
e
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
 
w
r
i
t
e
_
c
h
e
c
k
f
i
l
e
(
)
 

	
{

	
	
t
o
u
c
h
(
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
f
i
l
e
)
;

	
	
r
e
t
u
r
n
;

	
}

}

