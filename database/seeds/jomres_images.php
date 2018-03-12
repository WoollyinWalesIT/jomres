
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
7
 
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


$
q
u
e
r
y
 
=
 
"
T
R
U
N
C
A
T
E
 
T
A
B
L
E
 
`
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
i
m
a
g
e
s
`
;
"
;


i
f
 
(
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
u
p
d
a
t
e
_
s
e
t
t
i
n
g
(
'
i
m
a
g
e
s
_
i
m
p
o
r
t
e
d
_
t
o
_
d
b
'
,
 
'
0
'
)
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
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
t
r
u
n
c
a
t
e
 
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
i
m
a
g
e
s
 
t
a
b
l
e
'
,
 
'
d
a
n
g
e
r
'
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


/
/
d
e
f
i
n
e
 
M
E
D
I
A
C
E
N
T
R
E
_
R
O
O
M
J
S
 
s
o
 
t
h
a
t
 
w
h
e
n
 
m
e
d
i
a
 
c
e
n
t
r
e
 
w
i
l
l
 
t
r
i
g
g
e
r
 
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
 
t
o
 
d
i
s
c
o
v
e
r
 
a
v
a
i
l
a
b
l
e
 
r
e
s
o
u
r
c
e
s
,
 
t
h
e
i
r
 
j
s
 
w
o
n
`
t
 
b
e
 
e
c
h
o
e
d

d
e
f
i
n
e
(
'
M
E
D
I
A
C
E
N
T
R
E
_
R
O
O
M
J
S
'
,
 
1
)
;


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
'
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
_
d
b
i
m
p
o
r
t
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
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
_
d
b
i
m
p
o
r
t
 
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
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
_
d
b
i
m
p
o
r
t
(
a
r
r
a
y
(
1
)
,
 
t
r
u
e
)
;


i
f
 
(
$
j
o
m
r
e
s
_
m
e
d
i
a
_
c
e
n
t
r
e
_
i
m
a
g
e
s
_
d
b
i
m
p
o
r
t
-
>
r
u
n
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
u
p
d
a
t
e
_
s
e
t
t
i
n
g
(
'
i
m
a
g
e
s
_
i
m
p
o
r
t
e
d
_
t
o
_
d
b
'
,
 
'
1
'
)
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
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
i
n
s
e
r
t
 
i
m
a
g
e
 
d
e
t
a
i
l
s
 
t
o
 
d
a
t
a
b
a
s
e
'
,
 
'
d
a
n
g
e
r
'
)
;

}

