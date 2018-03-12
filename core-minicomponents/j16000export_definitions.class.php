
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
1
6
0
0
0
e
x
p
o
r
t
_
d
e
f
i
n
i
t
i
o
n
s

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
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
]
 
=
=
 
'
'
)
 
{

	
	
	
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
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
]
 
=
 
'
0
'
;

	
	
}

	
	

	
	
$
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
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
G
E
T
,
 
'
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
,
 
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
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
]
)
;

	
	
s
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
p
r
o
p
e
r
t
y
_
t
y
p
e
'
,
 
$
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
)
;

	
	

	
	
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
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
p
r
o
p
e
r
t
y
_
t
y
p
e
s
'
)
;

	
	

	
	
$
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
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
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
s
'
)
;

	
	

	
	
$
j
a
v
a
s
c
r
i
p
t
 
=
 
'
o
n
c
h
a
n
g
e
=
"
s
w
i
t
c
h
_
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
(
t
h
i
s
.
v
a
l
u
e
)
;
"
'
;


	
	
e
c
h
o
 
'
<
h
2
 
c
l
a
s
s
=
"
p
a
g
e
-
h
e
a
d
e
r
"
>
E
x
p
o
r
t
 
l
a
n
g
u
a
g
e
 
f
i
l
e
 
d
e
f
i
n
i
t
i
o
n
s
 
-
 
'
.
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
l
a
n
g
'
)
.
'
<
/
h
2
>
'
;

 
 
 
 
 
 
 
 

	
	
e
c
h
o
 
'
<
p
>
'
.
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
E
X
P
O
R
T
_
D
E
F
I
N
I
T
I
O
N
S
_
I
N
F
O
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
E
X
P
O
R
T
_
D
E
F
I
N
I
T
I
O
N
S
_
I
N
F
O
'
,
 
f
a
l
s
e
)
.
'
<
/
p
>
'
;

	
	

	
	
e
c
h
o
 
'
<
p
>
'
.
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
C
O
M
_
L
A
N
G
U
A
G
E
_
C
O
N
T
E
X
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
C
O
M
_
L
A
N
G
U
A
G
E
_
C
O
N
T
E
X
T
'
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
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
t
y
p
e
s
-
>
g
e
t
P
r
o
p
e
r
t
y
T
y
p
e
D
e
s
c
D
r
o
p
d
o
w
n
(
$
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
,
 
'
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
,
 
$
j
a
v
a
s
c
r
i
p
t
)
.
'
<
/
p
>
'
;


 
 
 
 
 
 
 
 
$
d
e
f
i
n
i
t
i
o
n
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
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
_
d
e
f
i
n
i
t
i
o
n
s
-
>
d
e
f
i
n
i
t
i
o
n
s
[
 
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
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
]
 
]
 
a
s
 
$
c
o
n
s
t
 
=
>
 
$
d
e
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
d
e
f
i
n
i
t
i
o
n
s
[
 
$
c
o
n
s
t
 
]
 
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
$
c
o
n
s
t
,
 
$
d
e
f
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
s
t
r
i
n
g
 
=
 
'

<
?
p
h
p

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

'
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
d
e
f
i
n
i
t
i
o
n
s
 
a
s
 
$
c
o
n
s
t
 
=
>
 
$
s
t
r
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
\
'
"
,
 
"
'
"
,
 
$
s
t
r
i
n
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
r
i
n
g
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
s
t
r
i
n
g
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
s
t
r
i
n
g
 
.
=
 
'
j
r
_
d
e
f
i
n
e
(
"
'
.
$
c
o
n
s
t
.
'
"
,
"
'
.
$
s
t
r
i
n
g
.
'
"
)
;

'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
t
e
x
t
a
r
e
a
 
s
t
y
l
e
=
"
w
i
d
t
h
:
 
1
0
0
%
;
h
e
i
g
h
t
:
 
9
0
0
p
x
;
"
 
>
'
.
$
o
u
t
p
u
t
_
s
t
r
i
n
g
.
'
<
/
t
e
x
t
a
r
e
a
>
'
;

 
 
 
 
}


 
 
 
 
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

